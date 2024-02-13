<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.71/jquery.csv-0.71.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        #chart_wrap {
    position: relative;
    padding-bottom: 100%;
    height: 0;
    overflow:hidden;
}

#chart_div {
    position: absolute;
    top: 0;
    left: 0;
    width:40%;
    height:40%;
}
#visualization_wrap {
    border:2px solid gray;
    position: relative;
    padding-bottom: 80%;
    height: 0;
    overflow:hidden;
}
#Sarah_chart_div {
    position: absolute;
    top: 0;
    left: 0;
    width:50%;
    height:50%;
}
@media (min-width: 360px) and (max-width: 576.98px) {  
#chart_div {
    position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height:100%;
}
#Sarah_chart_div {
    position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height:100%;
}

}
    </style>
</head>
<body>
    <div class="CONTAINER">

    <div id="chart_wrap"><div id="chart_div"></div></div>  
    <div id="visualization_wrap">
    <div id="Sarah_chart_div"></div>
</div>
   
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.71/jquery.csv-0.71.min.js"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script> 



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Workgreyy',     11],
    ['Eatryeeeeeeee',      2],
    ['Commuteyreeeeeeeeee',  2],
    ['Watch TV yreee', 2],
    ['Sleep ttttttttttttttttttttt',    7]
  ]);

  var options = {
    title: 'My Daily Activities',
    responsive: false,
    legend: { position: 'right' },
   chartArea: {
      right: 5,   // set this to adjust the legend width
      left: 60,     // set this eventually, to adjust the left margin
   },
  };

  var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}

$(window).on("throttledresize", function (event) {
    var options = {
        width: '50%',
        height: '50%'
    };

    var data = google.visualization.arrayToDataTable([]);
    drawChart(data, options);
});
 // Load Charts and the corechart package.
 google.charts.load('current', {'packages':['corechart']});

// Draw the pie chart for Sarah's pizza when Charts is loaded.
google.charts.setOnLoadCallback(drawSarahChart);



// Callback that draws the pie chart for Sarah's pizza.
function drawSarahChart() {

  // Create the data table for Sarah's pizza.
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Topping');
  data.addColumn('number', 'Slices');
  data.addRows([
    ['jan', 1],
    ['feb', 1],
    ['mar', 2],
    ['apr', 2],
    ['jun', 1],
    ['july', 3],
    ['aug', 4],
    ['oct', 5],
    ['nov', 6],
    ['dec', 6],
  
  ]);

  // Set options for Sarah's pie chart.
  var options = {
                title:'How Much Pizza Sarah Ate Last Night',
                 width:400,
                 height:300,
                 width: '100%',
                 height: '100%',
                  chartArea: {
      left: "10%",
      top: "10%",
      height: "60%",
      width: "100%"
  }
                 };

  // Instantiate and draw the chart for Sarah's pizza.
  var chart = new google.visualization.ColumnChart(document.getElementById('Sarah_chart_div'));
  chart.draw(data, options);
  
   $(document).ready(function () {
       $(window).resize(function(){
   drawSarahChart();
   });
 });
}


</script>

</html>