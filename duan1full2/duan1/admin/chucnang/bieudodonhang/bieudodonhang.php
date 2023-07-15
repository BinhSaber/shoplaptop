<figure class="highcharts-figure">
    <div id="container"></div>
</figure>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
$(document).ready(function() {
    const days = 30;
  $.ajax({
    url: 'chucnang/bieudodonhang/getdata.php',
    dataType: 'json',
    data: {days},
  })
  .done(function(response) {
    const arr = Object.values(response[0]);
    for(var i = 0; i < arr.length; i++)
    {
      arr[i].y = parseFloat(arr[i].y);
    }
    const arrayDetail = [];
    Object.values(response[1]).forEach((each) => {
      each.data = Object.values(each.data);
      arrayDetail.push(each);
    })
    console.log(response);
    setTimeout(function(){
      getChart(days,arr,arrayDetail),1000});
    });
  });
function getChart(days,arr,arrayDetail){
  Highcharts.chart('container', {
chart: {
  type: 'column'
},
title: {
  align: 'center',
  text: 'Thống Kê Doanh Thu Theo Tháng ' + days
},
subtitle: {
  align: 'left',
},
accessibility: {
  announceNewData: {
      enabled: true
  }
},
xAxis: {
  type: 'category',
},
yAxis: {
  title: {
      text: 'Tổng Số Bán Được'
  }

},
legend: {
  enabled: false
},
plotOptions: {
  series: {
      borderWidth: 0,
      dataLabels: {
          enabled: true,
          format: '{point.y:.f}VNĐ'
      }
  }
},

tooltip: {
  headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
  pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.f}</b>VNĐ<br/>'
},

series: [
  {
      name: "Tên Sản Phẩm",
      colorByPoint: true,
      data: arr
  }
],
drilldown: {
  series: arrayDetail
}
});
}
</script>
