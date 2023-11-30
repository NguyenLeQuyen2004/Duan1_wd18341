<div class="row2">
  <div class="row2 font_title">
    <h1>Biểu đồ</h1>
  </div>
  <div class="row2 form_content ">
    <div id="myChart" style="width:800px; height:500px; align-items: center">
    </div>

    <script>
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'DANH MỤC');
        data.addColumn('number', 'SỐ LƯỢNG');

        <?php
        foreach ($thongke as $tke) {
          extract($tke);
          echo "data.addRow(['$name', $slsp]);";
        }
        ?>

        var options = {
          title: 'Biểu đồ thống kê sản phẩm',
          is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
      }
    </script>

  </div>
</div>