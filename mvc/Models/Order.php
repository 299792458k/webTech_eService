<?php
class Order {
    public $id;
    public $fullname;
    public $phonenumber;
    public $address;
    public $note;
    public $order_time;
    public $status;
    public $user_id;
   
    public function __construct($id, $fullname, $phonenumber, $address, 
    $note, $order_time, $status, $user_id) {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->phonenumber = $phonenumber;
        $this->address = $address;
        $this->note = $note;
        $this->order_time = $order_time;
        $this->status = $status;
        $this->user_id = $user_id;
    }
}
