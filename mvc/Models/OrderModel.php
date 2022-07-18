<?php
if(!isset($_SESSION)) 
{ 
   session_start(); 
} 

class OrderModel extends DB
{

    public function getAll()
    {
        // $orders = $this->query('SELECT * FROM `order` WHERE status="Chờ xác nhận"');
        // return $orders;

        $user_id = null;
        if (isset($_SESSION["admin_id"])) {
            $admin_id = $_SESSION["admin_id"];
            $orders = $this->query('SELECT * FROM `order` WHERE status="Chờ xác nhận"');
            return $orders;
        }
        else {
            header('Location: http://aptorder.local/webTech_eService/admin/login');
        }
    }

    public function getAllForUser()
    {
        $user_id = null;
        if (isset($_SESSION["user_id"])) {
            $user_id = $_SESSION["user_id"];
            $orders = $this->query("SELECT * FROM `order` WHERE `status`='Đã xử lý' AND `user_id` = $user_id");
            return $orders;
        }
        else {
            header('Location: http://aptorder.local/webTech_eService/user/login');
        }
    }

    public function getById($id)
    {
        $orders = $this->query("SELECT * FROM `order` WHERE id = $id");
        return $orders;
    }

    public function update($id)
    {

        if (isset($_SESSION["admin_id"])) {
            $query = "UPDATE `order` SET status = 'Đã xử lý' WHERE id = $id";
            return $this->query($query);
        }
        else {
            header('Location: http://aptorder.local/webTech_eService/admin/login');
        }
    }

}
