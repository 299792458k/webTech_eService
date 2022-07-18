<?php
if(!isset($_SESSION)) 
{ 
   session_start(); 
} 
require_once './mvc/Utils/DataUtil.php';
require_once './mvc/Models/Detail.php';
require_once './mvc/Utils/SaveImageUtil.php';

class DetailController extends BaseController {

    public function index() {
       $orders =  $this->model("OrderDetailModel")->showForUser();
       $order = [];
       $sum = 0;
      if($orders != '') {
            while($order_item = mysqli_fetch_array($orders)) {
                $sum += $order_item['product_price'] * $order_item['quatity'];
                array_push($order, $order_item);
                
            }    
       } else {};

       $this->view('Vu/cart', ['carts' => $order, 'sum' => $sum]);
        
    }

    public function addproduct() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = 0;
            $product_name = getPost("product_name");
            $product_price = getPost("product_price");
            $product_size = getPost("product_size");
            $product_image = getPost("product_image");
            $quatity = getPost("quatity");
            $order_id = 1;

            $product = new Detail($id, $order_id, $product_name, $product_image, $product_price, $product_size, $quatity);
            $result = $this->model('OrderDetailModel')->addToOrderDetail($product);

            if ($result != '') {
               header('Location: http://aptorder.local/webTech_eService/order/history');
            } else {
                header('Location: http://aptorder.local/webTech_eService/order/history');
            }
        }
    }

    public function deleteitem($id) {
        $result = $this->model('OrderDetailModel')->deleteDetail($id);
        if($result != '') {
            header("Location: http://aptorder.local/webTech_eService/detail/index");
        }
        else {
            
        }
    }

}
