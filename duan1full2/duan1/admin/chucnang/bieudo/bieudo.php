
<div class="page-content p-5" id="content">
  <div id="piechart" style="width: 900px; height: 500px;"></div>
</div>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
        <?php
        $con=mysqli_connect("localhost","root","","duan1");
        $select = "select * from `danhmuc` ";
        $result = mysqli_query($con, $select);
        if($result){
          while($row = mysqli_fetch_assoc($result)){
            $madm = $row['madm'];
            $tendm = $row['tendm'];
            $count = "select * from `sanpham` where madm = '$madm' ";
            $result1 = mysqli_query($con, $count);
            $row1 = mysqli_num_rows($result1);
            ?>
            ['<?php echo $tendm ?>', <?php echo $row1 ?>],
        <?php } ?>
      <?php 
    } ?>
        ]);
        var options = {
          title: 'Biểu Đồ Thống Kê Số Hàng Hóa Theo Danh Mục',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>