<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\San_pham;
use Ductong\BaseMvc\Models\Binh_luan;

class BinhluanController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $binhluan = (new Binh_luan())->all();

        $this->render('admin/binhluan/index', ['binhluan' => $binhluan]);

    
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

            (new Binh_luan())->insert($data);

            header('Location: /admin/binhluan');
        }
        $binh_luan = (new Binh_luan())->all();
        $this->render('admin/binhluan/create', ['Binh_luan' => $binh_luan]);;
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

            (new Binh_luan())->update($data, $conditions);
        }

        $Binh_luan = (new Binh_luan())->findOne($_GET["id"]);

        $this->render('admin/binhluan/update', ['Binh_luan' => $Binh_luan]);;
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Binh_luan())->delete($conditions);

        header('Location: /admin/binhluan');
    }
}
