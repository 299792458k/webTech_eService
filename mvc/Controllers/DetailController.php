<?php

if (!isset($_SESSION)) {
    session_start();
}
require_once './mvc/Utils/DataUtil.php';
require_once './mvc/Models/Detail.php';
require_once './mvc/Utils/SaveImageUtil.php';

class DetailController extends BaseController {

    public function index() {
        if (isset($_SESSION['user_id'])) {
            $orders = $this->model("OrderDetailModel")->showForUser();
            $order = [];
            $sum = 0;
            if (isset($orders)) {
                while ($order_item = mysqli_fetch_array($orders)) {
                    $sum += $order_item['product_price'] * $order_item['quatity'];
                    array_push($order, $order_item);
                }
            } else {
                header('Location: /webTech_eService/home/index');
                exit;
            };

            $this->view('User/cart', ['carts' => $order, 'sum' => $sum]);
        } else
            header('Location: /webTech_eService/user/login');
    }

    public function addproduct() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_id'])) {
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
                header('Location: /webTech_eService/detail/index');
            } else {
                header('Location: /webTech_eService/order/history');
            }
        }
    }

    public function deleteitem($id) {
        if (isset($_SESSION['user_id'])) {
            $result = $this->model('OrderDetailModel')->deleteDetail($id);
            if ($result != '') {
                header("Location: /webTech_eService/detail/index");
            } else {
                
            }
        } else {
            header('Location: /webTech_eService/user/login');
        }
    }

}
