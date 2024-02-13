<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Getting Started with Chart JS with www.chartjs3.com</title>
    <style>

    </style>
  </head>
  <body>

<div id="chart_div"></div>

<script src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
 google.charts.load('current', {
  callback: drawBasic,
  packages: ['corechart']
});

function drawBasic() {
  var data = google.visualization.arrayToDataTable([
    ['City', '2010 Population', ],
    ['New York City, NY', 8175000],
    ['Los Angeles, CA', 3792000],
    ['Chicago, IL', 2695000],
    ['Houston, TX', 2099000],
    ['Philadelphia, PA', 1526000],
    ['New York City2, NY', 8175000],
    ['Los Angeles2, CA', 3792000],
    ['Chicago2, IL', 2695000],
    ['Houston2, TX', 2099000],
    ['Philadelphia2, PA', 1526000]
  ]);

  var options = {
    backgroundColor: 'cyan',
    title: 'Population of Largest U.S. Cities',

    // total size of chart
    height: 600,
    width: 900,

    // adjust size of chart area
    chartArea: {
      backgroundColor: 'magenta',

      // allow 70px for hAxis title and ticks
      height: 480,

      // allow 200px for vAxis title and ticks
      left: 200,

      // allow 50px for chart title
      top: 50,

      // allow 200px for legend on right
      width: 500
    },

    colors: ['yellow'],
    hAxis: {
      title: 'Total Population',
      minValue: 0
    },
    vAxis: {
      title: 'City'
    }
  };

  var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
  chart.draw(data, options);
}
    </script>

  </body>
</html>