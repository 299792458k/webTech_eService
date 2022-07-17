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
      if($orders != '') {
            while($order_item = mysqli_fetch_array($orders)) {
                array_push($order, $order_item);
                // echo $order_item['id'];
            }
            $this->view('User/cart/cart', ['carts' => $order]);
            // echo $orders;
      }
      else echo "false";
    }

    // public function history() {
    //     $details = $this->model('OrderDetailModel')->history();
    //     $items = [];
    //     if($details != '') {
    //         while($row = mysqli_fetch_array($details)) {
    //             array_push($items, $row);
    //             // echo $items['product_name'];
    //         }
    //         $this->view('Vu/manage-bill', ['items' => $items]);
    //     }
    //     else echo "nothing";
    // }

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
               echo "done";
            } else {
                echo "Insert Fail!!!";
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
