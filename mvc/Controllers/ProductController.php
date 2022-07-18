<?php
if(!isset($_SESSION)) 
{ 
   session_start(); 
} 
require_once './mvc/Utils/DataUtil.php';
require_once './mvc/Models/Product.php';
require_once './mvc/Utils/SaveImageUtil.php';

class ProductController extends BaseController {

    public function __construct()
    {
        if(!isset($_SESSION['admin_id'])) {
            header("Location: http://aptorder.local/webTech_eService/admin/login");
        }
        else{
            $proses = $this->model('ProductModel')->getAll();
            $this->pros = [];
            while( $pro = mysqli_fetch_array($proses)) {
                    array_unshift($this->pros, $pro);
            }
        }
    }

    public function index() {
        $this->view('Admin/manage-product', ['pros' => $this->pros]);
    }

    public function addhome() {
        $categories = $this->model("CategoryModel")->findAll();
        $this->view('Admin/admin/add-product', ['categories' => $categories]);
    }

    public function addproduct() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = 0;
            $category_id = getPost("category_id");
            $name = getPost("name");
            $status_product_id = 1;
            $image = saveImage($_FILES["image-input"]);
//            $image = "abc";
            $description = getPost("description");
            $price_free_size = getPost("price_free_size");
            $price_s = getPost("price_s");
            $price_m = getPost("price_m");
            $price_l = getPost("price_l");

            $product = new Product($id, $category_id, $name, $status_product_id, $image, $description, $price_free_size, $price_s, $price_m, $price_l);
            $result = $this->model('ProductModel')->add($product);
            if ($result) {
                $message = "Insert Success!";
            } else {
                $message = "Insert Fail!!!";
            }
        }
        $this->view('Admin/admin/manage-product', ['pros' => $this->pros]);
    }

    public function updatehome($id) {
        $id_product = (int) $id;
        $product = $this->model("ProductModel")->findById($id_product);
        $categories = $this->model("CategoryModel")->findAll();
        $status = $this->model("StatusModel")->findAll();
        $this->view('Admin/admin/edit-product', ['product' => $product, 'categories' => $categories, 'status' => $status]);
    }

    public function update() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {        
            $id = getPost("id");
            
            $oldproduct = mysqli_fetch_array($this->model("ProductModel")->findById((int)$id));
            
            $category_id = getPost("category_id");
            $name = getPost("name");
            $status_product_id = getPost("status_id");
            if (is_null($_FILES["image-input"])) {
                $image = saveImage($_FILES["image-input"]);
            } else {
                $image = $oldproduct["image"];
            }
            $description = getPost("description");
            $price_free_size = getPost("price_free_size");
            $price_s = getPost("price_s");
            $price_m = getPost("price_m");
            $price_l = getPost("price_l");

            $product = new Product($id, $category_id, $name, $status_product_id, $image, $description, $price_free_size, $price_s, $price_m, $price_l);
            $result = $this->model('ProductModel')->update($product);
            if ($result) {
                $message = "Update Success!";
            } else {
                $message = "Update Fail!!!";
            }

            $categories = $this->model("CategoryModel")->findAll();
            $status = $this->model("StatusModel")->findAll();
            $this->view('Admin/admin/manage-product', ['message' => $message, 'product' => $product, 'categories' => $categories, 'status' => $status]);
        }
    }

    public function deleteProduct($id) {
        $this->model('ProductModel')->updateById($id);
        header("Location: http://aptorder.local/webTech_eService/product/index");
        exit();
    }

}
