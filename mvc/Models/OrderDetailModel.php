<?php
if(!isset($_SESSION)) 
{ 
   session_start(); 
} 

class OrderDetailModel extends DB
{
    public function __construct()
    {
        parent::__construct();

        $this->user_id = null;
        $this->order_id = null;
        if (isset($_SESSION["user_id"])) {
            $this->user_id = $_SESSION["user_id"];
            $orders = $this->query("SELECT * FROM `order` WHERE status='Đang tạo' AND user_id=$this->user_id");
            $num_rows = mysqli_num_rows($orders);
            if ($num_rows != 0) {
                $orders = mysqli_fetch_array($orders);
                if($orders != null) {
                    $this->order_id = $orders['id'];                    
                }
            } 
            else {
                $query1 = "INSERT INTO `order` (user_id, status) VALUES ($this->user_id, 'Đang tạo')";
                $orders = $this->query($query1);
                $query2 = "SELECT * FROM `order` WHERE status='Đang tạo' AND user_id = $this->user_id";
                $order = $this->query($query2);
                $order = mysqli_fetch_array($order);
                $this->order_id = $order['id'];
                
            }
        }
    }

    public function getAll($id)
    {
        $query = "SELECT * FROM order_detail WHERE order_id=$id";
        return $this->query($query);
    }

    public function addToOrderDetail($item)
    {
        return $this->query("INSERT INTO order_detail"
                . " (order_id, product_name, product_price, quatity, product_size, product_image)"
                . " VALUES ($this->order_id, '$item->product_name', $item->product_price, $item->quatity, '$item->product_size',"
                . " '$item->product_image')");
    }

    public function showForUser()
    {
        return $this->query("SELECT * FROM `order_detail` WHERE order_id=$this->order_id");
    }

    // public function history()
    // {
    //     return $this->query("SELECT `order_detail`.*, `order`.*"
    //             ."FROM `order`"
    //             ." LEFT JOIN `order_detail` ON `order`.id = `order_detail`.order_id"
    //             ." WHERE `order`.user_id=$this->user_id AND `order`.status='Đã xử lý'");
    // }

    public function deleteDetail($id) {
        return $this->query("DELETE FROM order_detail WHERE id=$id");
    }

    public function order($product) {
        return $this->query("UPDATE `order` SET fullname='$product->fullname', phonenumber='$product->phonenumber', address='$product->address', note='$product->note',"
                . " order_time='$product->order_time', status='Chờ xác nhận'"
                . " WHERE id=$this->order_id");
    }
}
