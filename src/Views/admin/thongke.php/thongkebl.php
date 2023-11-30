<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="search">
        <form action="index.php?act=thongkebl" method="post">
            <input type="text" name="kyw" placeholder="Nhập từ khoá cần tìm">
            <button type="submit">Tìm kiếm</button>
        </form>
    </div>
    <div class="row2 form_content ">
        <?php foreach ($thongkebl as $tke) : ?>
            <?php extract($tke);
            ?>
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th>TÊN SẢN PHẨM</th>
                            <th>SỐ LƯỢNG BL</th>
                            <th>NGÀY MỚI NHẤT</th>
                            <th>NGÀY CŨ NHẤT</th>
                        </tr>
                        <tr>
                            <td><?= $tensp ?></td>
                            <td><?= $slbl ?></td>
                            <td><?= $ngaymoinhat ?></td>
                            <td><?= $ngaycunhat ?></td>
                        </tr>
                    </table>
                </div>
            </form>
        <?php endforeach ?>
    </div>
</div>
</div>