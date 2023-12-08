<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Order;
use Ductong\BaseMvc\Models\Status;
use Ductong\BaseMvc\Models\Product;

class OrderController extends Controller {

    
    
    /* Lấy danh sách */
    public function index() {
        $orders = (new Order())->all();
        $status = (new Status())->all();
        $product = (new Product())->all();

        $arrayStatusName = [];
        foreach ($status as $ha) {
            $arrayStatusName[$ha['id']] = $ha['name'];
        }
        $this->renderAdmin("orders/index", ["orders" => $orders , "arrayStatusName"=>$arrayStatusName , "product"=>$product]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name' => $_POST['name'],
            ];

            (new Order())->insert($data);

            header('Location: /admin/categories');
        }


        $this->renderAdmin("orders/create");
    }

    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'total_price' => $_POST['total_price'],
                'status_id' => $_POST['status_id'],
                'created_at' => $_POST['created_at'],

            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Order())->update($data, $conditions);

        }

        $order = (new Order())->findOne($_GET["id"]);
        $status = (new Status())->all();

        $this->renderAdmin("orders/update", ["order" => $order , "status" => $status]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Order())->delete($conditions);

        header('Location: /admin/orders');
    }
}