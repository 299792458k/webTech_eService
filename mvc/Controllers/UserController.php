<?php
 if(!isset($_SESSION)) 
 { 
    session_start(); 
 } 

require_once './mvc/Utils/DataUtil.php';
require_once './mvc/Models/User.php';
require_once './mvc/Models/Product.php';
require_once './mvc/Utils/SaveImageUtil.php';

class UserController extends BaseController {

    public function login() {
        return $this->view('Vu/login');
    }

    public function logout() {
        session_destroy();
        header('Location: http://aptorder.local/webTech_eService/user/login');
    }

    public function index() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = getPost('email');
            $password = getPost('password');

            $user = $this->model('UserModel')->login($email, $password);
            if($user != '') {
                $user = mysqli_fetch_array($user); 
                if($user != null) {
                    $_SESSION["user_id"] = $user['id'];
                    $_SESSION["user_name"] = $user['username'];
                    // return $this->view('Vu/manage-bill', ['user' => $user]);
                    header('Location: http://aptorder.local/webTech_eService/order/history');
                }
                else{
                    header('Location: http://aptorder.local/webTech_eService/user/login');
                }
            }
            else{
                header('Location: http://aptorder.local/webTech_eService/user/login');
            }
           
        }

    }

    public function register() {
        return $this->view('Vu/signup');
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
                return $this->view('Vu/login');
            } else {
                return $this->view('Vu/signup');
            }
        }
    }

}
