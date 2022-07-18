<?php
 if(!isset($_SESSION)) 
 { 
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
        header('Location: http://aptorder.local/webTech_eService/admin/login');
    }

    public function index() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = getPost('email');
            $password = getPost('password');

            $user = $this->model('AdminModel')->login($email, $password);
            if($user != '') {
                $user = mysqli_fetch_array($user); 
                if($user != null) {
                    $_SESSION["admin_id"] = $user['id'];
                    // $_SESSION["user_name"] = $user['username'];
                    // return $this->view('Admin/admin/manage-product', ['user' => $user]);
                    header('Location: http://aptorder.local/webTech_eService/product/index');
                }
                else{
                    header('Location: http://aptorder.local/webTech_eService/admin/login');
                }
            }
            else{
                header('Location: http://aptorder.local/webTech_eService/admin/login');
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

    }



