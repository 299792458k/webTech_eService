<?php

require_once './mvc/Utils/DataUtil.php';
require_once './mvc/Models/Order.php';
require_once './mvc/Utils/SaveImageUtil.php';

class OrderController extends BaseController {

    public function index() {
       $orders =  $this->model("OrderModel")->getAll();
       $order = [];
       $details = array(array());
       while($order_item = mysqli_fetch_array($orders)) {
            array_push($order, $order_item);

            $detail = $this->model("OrderDetailModel")->getAll($order_item['id']);
            $details[$order_item['id']] = [];
            while($detail_item = mysqli_fetch_array($detail)) {
                array_push($details[$order_item['id']], $detail_item);
            }
       }
       $this->view('Admin/manage-bill', ['orders' => $order, 'details' => $details]);
    }

    public function history() {
        $orders =  $this->model("OrderModel")->getAllForUser();
        $order = [];
        $details = array(array());
        while($order_item = mysqli_fetch_array($orders)) {
            // echo $order_item['id'];
             array_push($order, $order_item);
 
             $detail = $this->model("OrderDetailModel")->getAll($order_item['id']);
             $details[$order_item['id']] = [];
             while($detail_item = mysqli_fetch_array($detail)) {
                 array_push($details[$order_item['id']], $detail_item);
             }
        }
        $this->view('Vu/manage-bill', ['orders' => $order, 'details' => $details]);
    }

    public function update($id) {
        $this->model('OrderModel')->update($id);
        header('Location: http://aptorder.local/webTech_eService/order/index');
    }

    public function billShow($id) {
        if (isset($_SESSION["admin_id"])) {
            $orders =  $this->model("OrderModel")->getById($id);
            $order = [];
            $details = array(array());
            while($order_item = mysqli_fetch_array($orders)) {
                    array_push($order, $order_item);

                    $detail = $this->model("OrderDetailModel")->getAll($order_item['id']);
                    $details[$order_item['id']] = [];
                    while($detail_item = mysqli_fetch_array($detail)) {
                        array_push($details[$order_item['id']], $detail_item);
                    }
                }
            $this->view('Admin/bill', ['order' => $order, 'detail' => $details]);
        }
        else {
            header('Location: http://aptorder.local/webTech_eService/admin/login');
        }
    }

    public function billShowForUser($id) {
        if (isset($_SESSION["user_id"])) {
            $orders =  $this->model("OrderModel")->getById($id);
            $order = [];
            $details = array(array());
            while($order_item = mysqli_fetch_array($orders)) {
                    array_push($order, $order_item);

                    $detail = $this->model("OrderDetailModel")->getAll($order_item['id']);
                    $details[$order_item['id']] = [];
                    while($detail_item = mysqli_fetch_array($detail)) {
                        array_push($details[$order_item['id']], $detail_item);
                    }
            }
            $this->view('Vu/bill', ['order' => $order, 'detail' => $details]);
        }
        else {
            header('Location: http://aptorder.local/webTech_eService/user/login');
        }
    }

    public function add() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = 0;
            $fullname = getPost("fullname");
            $phonenumber = getPost("phonenumber");
            $address = getPost("address");
            $note = getPost("note");
            $order_time = getPost("order_time");
            $status = 'Chờ xác nhận';
            $user_id = 0;

            $order = new Order($id, $fullname, $phonenumber, $address, $note, $order_time, $status, $user_id);
            $result = $this->model('OrderDetailModel')->order($order);

            if ($result != '') {
               echo "done";
            } else {
                echo "Insert Fail!!!";
            }
        }
    }


}
