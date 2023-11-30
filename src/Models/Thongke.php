<?php
function thongkedm($kyw = "")
{
    $sql = "select danhmuc.name as name, danhmuc.id as iddm, danhmuc.name as tendm, count(sanpham.id) as slsp, min(sanpham.price) as minsp, max(sanpham.price) as maxsp, avg(sanpham.price) as avgsp from sanpham left join danhmuc on danhmuc.id = sanpham.iddm";
    if ($kyw != "") {
        $sql .= " where danhmuc.name like '%" . $kyw . "%'";
    }
    $sql .= " group by danhmuc.id order by danhmuc.id desc";

    // $thongke = pdo_query($sql);

    // return $thongke;
}

function thongkebl($kyw = "")
{
    $sql = "select sanpham.name as tensp, count(binhluan.iduser) as slbl, max(binhluan.ngaybinhluan) as ngaymoinhat, min(binhluan.ngaybinhluan) as ngaycunhat
        from binhluan
        join sanpham on sanpham.id = binhluan.idpro
        join taikhoan on taikhoan.id = binhluan.iduser";

    if ($kyw != "") {
        $sql .= " where sanpham.name like '%" . $kyw . "%'";
    }

    $sql .= " group by sanpham.id";

    // $thongke = pdo_query($sql);
    // return $thongke;
}