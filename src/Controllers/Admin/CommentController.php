<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;

class CommentController extends Controller {

    
    
    
    /* Lấy danh sách */
    public function index() {
        $binhluan = (new Comment())->all();

        $this->renderAdmin("binhluan/index", ["binhluan" => $binhluan]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'noidung' => $_POST['noidung'],
                'iduser' => $_POST['iduser'],
                'idpro' => $_POST['idpro'],
                'ngaybinhluan' => $_POST['ngaybinhluan'],
            ];

            (new Comment())->insert($data);

            header('Location: /admin/binhluan');
        }

        $this->renderAdmin("binhluan/create");
    }

    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                'noidung' => $_POST['noidung'],
                'iduser' => $_POST['iduser'],
                'idpro' => $_POST['idpro'],
                'ngaybinhluan' => $_POST['ngaybinhluan'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Comment())->update($data, $conditions);
        }

        $binhluan = (new Comment())->findOne($_GET["id"]);

        $this->renderAdmin("binhluan/update", ["binhluan" => $binhluan]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Comment())->delete($conditions);

        header('Location: /admin/binhluan');
    }
}