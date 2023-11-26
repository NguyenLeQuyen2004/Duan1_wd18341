<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\San_pham;

use Ductong\BaseMvc\Models\Category;

class SanphamController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index()
    {
        $sanpham = (new san_pham)->all();
        $categories = (new Category())->all();

        // Mảng này có cấu trúc, key là id danh mục, value là tên danh mục
        // Tạo ra mảng này để hiển thị tên danh mục sản phẩm ở danh sách
        $arrayCategoryIdName = [];
        foreach ($categories as $category) {
            $arrayCategoryIdName[$category['id']] = $category['name'];
        }

        $this->renderAdmin(
            "sanpham/index",
            [
                "sanpham" => $sanpham,
                "arrayCategoryIdName" => $arrayCategoryIdName
            ]
        );
    }
    public function createPage()
    {
        $categories = (new Category())->all();
        $this->render('admin/sanpham/create',  ["categories" => $categories]);
    }
    //thêm mới
    public function create()
    {
        if (isset($_POST['btn-submit'])) {
            // $target_dir = "/../../../img/";
            // $target_file = $target_dir . basename($_FILES["image"]["name"]);
            // move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                // 'img'=> $target_file,
                'mota' => $_POST['mota'],
                'iddm' => $_POST['iddm'],
            ];

            $data['img'] = null;
            $img = $_FILES['img'] ?? null;
            if ($img) {

                // Đường dẫn lưu DB vì thư mục upload cùng cấp với index.php
                // Khi lưu vào DB, chú ý là trước uploads có dấu /
                $pathSaveDB = '/uploads/' . $img['name'];

                // Đường dẫn upload có thêm __DIR__ . '/../../../'
                // vì File ProductController của mình đang cách thư mục uploads 3 cấp
                // Nên sẽ thấy có 3 lần ../
                // __DIR__ là 2 const mặc định của PHP để lấy ra đường dẫn thư mục hiện tại của ProductController 
                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
                    $data['img'] = $pathSaveDB;
                }
            }


            (new san_pham)->insert($data);

            header('Location: /admin/sanpham');
        }
    }
    // cập nhật
    public function update()
    {
        if (isset($_POST['btn-submit'])) {
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                // 'img' => $_FILES['img'],
                'mota' => $_POST['mota'],
                'iddm' => $_POST['iddm'],
            ];
            $data['img'] = $_POST['img_current'];
            $img = $_FILES['img'] ?? null;
            $flag = false;
            if ($img) {

                $pathSaveDB = '/uploads/' . $img['name'];
                $pathUpload = __DIR__ . '/../../../uploads/' . $img['name'];

                if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
                    $data['img'] = $pathSaveDB;
                    $flag = true;
                }
            }

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new san_pham())->update($data, $conditions);

            if ($flag) {

                // Xóa file dùng hàm unlink 
                // Path file cũng phải giống như $pathUpload
                $pathFile = __DIR__ . '/../../..' . $_POST['img_current'];
                unlink($pathFile);
            }
        }
        $san_pham = (new san_pham)->findOne($_GET['id']);
        $categories = (new Category())->all();

        $this->render('admin/sanpham/update', ['san_pham' => $san_pham, 'categories' => $categories]);
    }
    // xóa
    public function delete()
    {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new san_pham)->delete($conditions);
        $pathFile = __DIR__ . '/../../..' . $_POST['img'];
        unlink($pathFile);


        header('Location: /admin/sanpham');
    }
}
