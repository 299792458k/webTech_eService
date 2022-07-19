<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once './mvc/Utils/DataUtil.php';
require_once './mvc/Models/Product.php';
require_once './mvc/Utils/SaveImageUtil.php';

class AdminController extends BaseController {

    public function login() {
        return $this->view('Admin/login');
    }

    public function logout() {
        session_destroy();
        header('Location: /webTech_eService/admin/login');
    }

    public function index() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = getPost('email');
            $password = getPost('password');

            $user = $this->model('AdminModel')->login($email, $password);
            if ($user != '') {
                $user = mysqli_fetch_array($user);
                if ($user != null) {
                    $_SESSION["admin_id"] = $user['id'];
                    $_SESSION["admin_name"] = $user['name'];
                    // return $this->view('Admin/admin/manage-product', ['user' => $user]);
                    header('Location: /webTech_eService/product/index');
                } else {
                    header('Location: /webTech_eService/admin/login');
                }
            } else {
                header('Location: /webTech_eService/admin/login');
            }
        }
    }

    public function manageUsers() {
        $result = $this->model('WishList')->getAll();
        $users = [];
        while ($row = mysqli_fetch_array($result)) :
            $user = array("name" => htmlentities($row['name']),
                "id" => htmlentities($row['id']),
                "sdt" => htmlentities($row['sdt']));
            array_push($users, $user);
        endwhile;
        mysqli_free_result($result);
        $this->view('Admin/manage-user', [
            'users' => $users,
        ]);
    }

    public function editHome() {
        if (isset($_SESSION['admin_id'])) {
            $admin = $this->model('AdminModel')->getById($_SESSION['admin_id']);
            return $this->view('Admin/edit-user', ['admin' => $admin]);
        } else {
            return $this->view('Layouts/login/login');
        }
    }

    public function edit() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['admin_id'])) {
//        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // get information of account to edit
            $id = getPost('id');
            $email = getPost('email');
            $password = getPost('password');
            $username = getPost('name');

            $result = $this->model("AdminModel")->update($id, $email, $password, $username);
            if ($result) {
                $status = "success";
            } else {
                $status = "fail";
            }

            session_start();
            $_SESSION['status'] = $status;
//            $admin = $this->model('AdminModel')->getById($_SESSION['admin_id']);
//            return $this->view('Admin/Admin/edit-user', ['admin'=>$admin, 'message'=>$message]);
            header("Location: /webTech_eService/admin/edithome");
            exit;
        }
    }

}
