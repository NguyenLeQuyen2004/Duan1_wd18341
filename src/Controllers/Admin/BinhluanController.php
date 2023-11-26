<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\san_pham;
use Ductong\BaseMvc\Models\Binh_luan;

class BinhluanController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $sanpham = (new san_pham)->all();
        $users = (new User)->all();
        $binhluan = (new Binh_luan())->all();

        $arraySanPhamIdName = [];
        foreach ($sanpham as $San_pham) {
            $arraySanPhamIdName[$San_pham['id']] = $San_pham['name'];
        }

        $arrayUserIdName = [];
        foreach ($users as $user) {
            $arrayUserIdName[$user['id']] = $user['name'];
        }

        $this->renderAdmin("binhluan/index", 
            [
                "binhluan" => $binhluan, 
                "arraySanPhamIdName" => $arraySanPhamIdName,
                "arrayUserIdName" => $arrayUserIdName,
                'ngaybinhluan' => date('Y-m-d H:i:s'), // Lấy ngày và giờ hiện tại
            ]
        );

    
    }


    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'noidung' => $_POST['noidung'],
                'iduser' => $_POST['iduser'],
                'idpro' => $_POST['idpro'],
                'ngaybinhluan' => date('Y-m-d H:i:s'), // Lấy ngày và giờ hiện tại
            ];

            (new Binh_luan())->insert($data);

            header('Location: /admin/binhluan');
        }
        $binh_luan = (new Binh_luan())->all();
        $sanpham = (new san_pham)->all();
        $users = (new User)->all();
        $this->render('admin/binhluan/create', ['Binh_luan' => $binh_luan , 'sanpham' => $sanpham , 'users' => $users]);;
    }

    /* Cập nhật */
    public function update() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'noidung' => $_POST['noidung'],
                'iduser' => $_POST['iduser'],
                'idpro' => $_POST['idpro'],
                'ngaybinhluan' => date('Y-m-d H:i:s'), // Lấy ngày và giờ hiện tại
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Binh_luan())->update($data, $conditions);
        }

        $Binh_luan = (new Binh_luan())->findOne($_GET["id"]);
        $sanpham = (new san_pham)->all();
        $users = (new User)->all();

        $this->render('admin/binhluan/update', ['Binh_luan' => $Binh_luan , 'sanpham' => $sanpham , 'users' => $users]);;
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
