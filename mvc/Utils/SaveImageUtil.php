<?php

//$image_input is $_FILES[] of picture which you want to save
function saveImage($image_input) {
        $errors = array();
        $file_name = $image_input['name'];
        $file_size = $image_input['size'];
        $file_tmp = $image_input['tmp_name'];
        $file_type = $image_input['type'];
        $file_parts = explode('.', $image_input['name']);
        $file_ext = strtolower(end($file_parts));
        $expensions = array("jpeg", "jpg", "png");
        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
        }
        if ($file_size > 2097152) {
            $errors[] = 'Kích thước file không được lớn hơn 2MB';
        }
        $target = "/mvc/images/" . basename($file_name);
        $i = 1;
        while (file_exists(SITE_ROOT.$target)) {
            $target = "/mvc/images/" . $file_parts[0] . $i . '.' . $file_ext;
            $i += 1;
        }
        if (move_uploaded_file($image_input['tmp_name'], SITE_ROOT.$target)) {
            echo "<script language='javascript'>alert('$target');</script>";
        } else {
            echo '<script language="javascript">alert("Fail");</script>';
        }
        return "/webTech_eService".$target;
}
