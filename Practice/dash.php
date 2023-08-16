<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.css" rel="stylesheet" />
  <script src="JavaScript/jquery-1.10.2.js" type="text/javascript"></script> 
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link href="../css/dashboard.css" rel="stylesheet" />
  <link href="../css/config.css" rel="stylesheet" />
  <title>Regal Test</title>
</head>
<style>
  .chartsdiv
  {
    margin:0 !important;
  display: flex;
  flex-direction: column;
  }
  .chart {
  width: 100%; 
  min-height: 450px;
}
  .menu {
    padding: 20px;
    background-color: #618cfb;
    margin: 5px;
    border-radius: 10px;
  }

  .menu-label {
    color: white !important;
    font-weight: 600;
    font-size: 18px;
  }

  .menu-list a {
    color: white;
  }
</style>

<body>
  <?php include 'header.php'; ?>

  <div class="section" style="padding:1rem 0rem;">
    <div class="columns">
      <?php include 'sidebar.php';  ?>

      <main class="column">
        <div class="level">
          <div class="level-left">
            <div class="level-item">
              <div class="title">Dashboard</div>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
              <button type="button" class="button is-small">
                March 8, 2017 - April 6, 2017
              </button>
            </div>
          </div>
        </div>

        <div class="columns is-multiline">
          <div class="column">
            <div class="box">
              <div class="heading" style="font-size:15px !important;height:25px;" >Total Hours Practiced</div>
              <br>
              <div class="title">10</div>
              
            </div>
          </div>
          <div class="column">
            <div class="box">
              <div class="heading" style="font-size:15px !important;height:25px;">Total Questions Answered</div>
              <br>
              <div class="title">156</div>
              
            </div>
          </div>
          <div class="column">
            <div class="box">
              <div class="heading" style="font-size:15px !important;height:25px;">Mock Test Passed</div>
              <br>
              <div class="title">4</div>
              
            </div>
          </div>
          <div class="column">
            <div class="box">
              <div class="heading" style="font-size:15px !important;height:25px;">Mock Test Recent-Score</div>
              <br>
              <div class="title">54</div>
              
            </div>
          </div>
          
        </div>
        <div class="chartsdiv">
        <div class="col-md-6">
    <div id="chart_div1" class="chart"></div>
  </div>
  <div class="col-md-6">
    <div id="chart_div2" class="chart"></div>
  </div>
        </div>
        
    </main>
    </div>
  </div>
  
</body>
<script type="text/javascript">
$(window).resize(function(){
  drawChart();
});


    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".topmenu a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
                //for making parent of submenu active
               $(this).closest("li").parent().parent().addClass("active");
            }
        });
    });        
</script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart1);
function drawChart1() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2004',  1000,      400],
    ['2005',  1170,      460],
    ['2006',  660,       1120],
    ['2007',  1030,      540]
  ]);

  var options = {
    title: 'Company Performance',
    hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
 };

var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
  chart.draw(data, options);
}

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart2);
function drawChart2() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2013',  1000,      400],
    ['2014',  1170,      460],
    ['2015',  660,       1120],
    ['2016',  1030,      540]
  ]);

  var options = {
    title: 'Company Performance',
    hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
    vAxis: {minValue: 0}
  };

  var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
  chart.draw(data, options);
}

$(window).resize(function(){
  drawChart1();
  drawChart2();
});

</script>

<script language = "JavaScript">
        
      </script>

<script>

  let isopen = false;
  var toggledd = document.getElementById("toggle-dropdown");
  console.log("I got it:", isopen)
  function toggle() {

    if (isopen === false) {
      toggledd.parentElement.parentElement.classList.add("is-active");
      isopen = true
      console.log("I got it:", isopen)
    }
    else if (isopen === true) {
      toggledd.parentElement.parentElement.classList.remove('is-active');
      isopen = false
      console.log("I got it:", isopen)
    }
  }
</script>

</html>