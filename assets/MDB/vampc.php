<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Material Design Bootstrap</title>
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
</head>

<body>

    
  <canvas id="myChart"></canvas>
  
  <script>

    $(function () {
        var data = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86, 27, 90]
            }
            ]
        };

        var option = {
        responsive: true,
        };

        // Get the context of the canvas element we want to select
        var ctx = document.getElementById("myChart").getContext("2d");
        var myLineChart = new Chart(ctx).Bar(data, option); //'Line' defines type of the chart.
    });



    </script>
 
    
</body>

</html>
