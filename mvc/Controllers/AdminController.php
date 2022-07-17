<?php

class AdminController extends BaseController {

    public function index() {
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
}
