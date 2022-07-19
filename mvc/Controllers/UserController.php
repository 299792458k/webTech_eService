<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once './mvc/Utils/DataUtil.php';
require_once './mvc/Models/User.php';
require_once './mvc/Models/Product.php';
require_once './mvc/Utils/SaveImageUtil.php';

class UserController extends BaseController {

    public function login() {
        return $this->view('User/login');
    }

    public function logout() {
        session_destroy();
        header('Location: /webTech_eService/user/login');
    }

    public function index() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = getPost('email');
            $password = getPost('password');

            $user = $this->model('UserModel')->login($email, $password);
            if ($user != '') {
                $user = mysqli_fetch_array($user);
                if ($user != null) {
                    $_SESSION["user_id"] = $user['id'];
                    $_SESSION["user_name"] = $user['username'];
                    header('Location: /webTech_eService/home/index');
                } else {
                    header('Location: /webTech_eService/user/login');
                }
            } else {
                header('Location: /webTech_eService/user/login');
            }
        }
    }

    public function register() {
        return $this->view('User/signup');
    }

    public function registerUser() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = 0;
            $username = getPost("username");
            $address = getPost("address");
            $phonenumber = getPost("phonenumber");
            $email = getPost("email");
            $password = getPost("password");

            $user = new User($id, $username, $address, $phonenumber, $email, $password);
            $result = $this->model('UserModel')->register($user);

            if ($result != '') {
                return $this->view('User/login');
            } else {
                return $this->view('User/signup');
            }
        }
    }

    public function edithome() {
        if (isset($_SESSION['user_id'])) {
            $user = $this->model('UserModel')->getById($_SESSION['user_id']);
//                    $user = $this->model('UserModel')->getById('2');
            return $this->view('User/edit-user', ['user' => $user]);
        } else {
            return $this->view('Layouts/login/login');
        }
    }

    public function edit() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_id'])) {
//        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // get information of account to edit
            $id = getPost('id');
            $email = getPost('email');
            $password = getPost('password');
            $username = getPost('name');
            $phonenumber = getPost('phonenumber');
            $address = getPost('address');

            $result = $this->model("UserModel")->update($id, $password, $username, $phonenumber, $address);
            if ($result) {
                $status = "success";
            } else {
                $status = "fail";
            }

            session_start();
            $_SESSION['status'] = $status;
//            $user = $this->model('UserModel')->getById($_SESSION['user_id']);
//            $user = $this->model('UserModel')->getById($id);
//            return $this->view('User/user/edit-user', ['user'=>$user, 'message'=>$message]);
            header("Location: /webTech_eService/user/edithome");
            exit;
        }
    }

    public function getProductInfo($id) {
        $product = $this->model('ProductModel')->findByID($id);
        $this->view('User/productinfo', ['product' => $product]);
    }

}
