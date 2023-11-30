<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI HÀNG THEO DANH MỤC</h1>
    </div>
    <div class="search">
        <form action="index.php?act=thongkedm" method="post">
            <input type="text" name="kyw" placeholder="Nhập từ khoá cần tìm">
            <button type="submit">Tìm kiếm</button>
        </form>
    </div>
    <div class="row2 form_content ">
        <?php foreach ($thongkedm as $tke) : ?>
            <?php extract($tke);
            ?>
            <form action="#" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table>
                        <tr>
                            <th>MÃ DANH MỤC</th>
                            <th>TÊN DANH MỤC</th>
                            <th>SỐ LƯỢNG SP</th>
                            <th>GIÁ THẤP NHẤT</th>
                            <th>GIÁ CAO NHẤT</th>
                            <th>GIÁ TB</th>
                        </tr>
                        <tr>
                            <td><?= $iddm ?></td>
                            <td><?= $tendm ?></td>
                            <td><?= $slsp ?></td>
                            <td><?= number_format($minsp, 0, ',', '.') ?> VND</td>
                            <td><?= number_format($maxsp, 0, ',', '.') ?> VND</td>
                            <td><?= number_format($avgsp, 0, ',', '.') ?> VND</td>
                        </tr>
                    </table>
                </div>
            </form>
        <?php endforeach ?>
    </div>
</div>
</div>