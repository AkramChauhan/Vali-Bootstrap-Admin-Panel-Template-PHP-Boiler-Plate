<!DOCTYPE html>
<html lang="en">
  <head>
    <?php   
      //load Meta Tags
      include "includes/meta.php";
      //load CSS Files
      include "includes/load_css.php";
    ?>
  </head>

  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include "includes/header.php"; ?>

    <!-- Page Conte t -->
    <main class="app-content">
      <?php include "pages/charts.php"; ?>
    </main>

    <!-- Load Scripts-->
    <?php include "includes/load_js.php"; ?>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "Red"
      	},
      	{
      		value: 50,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Green"
      	},
      	{
      		value: 100,
      		color: "#FDB45C",
      		highlight: "#FFC870",
      		label: "Yellow"
      	}
      ]

      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);

      var ctxb = $("#barChartDemo").get(0).getContext("2d");
      var barChart = new Chart(ctxb).Bar(data);

      var ctxr = $("#radarChartDemo").get(0).getContext("2d");
      var radarChart = new Chart(ctxr).Radar(data);

      var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
      var polarChart = new Chart(ctxpo).PolarArea(pdata);

      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);

      var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
      var doughnutChart = new Chart(ctxd).Doughnut(pdata);
    </script>
  </body>
</html>
