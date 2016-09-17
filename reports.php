<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Valley Fault System</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-select.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
   <link rel="stylesheet" href="fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="maps.php">Hackzilla</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="maps.php" onclick="showEarthquakes();backtotop();">Valley Fault System</a></li>
          <li><a href="maps.php"  onclick="showEvacuation();backtotop();">Evacuation Areas</a></li>
          <li><a href="maps.php" onclick="earthquake();" style="cursor: pointer;">Earthquakes</a></li>
          <li><a href="reports.php">Reports</a></li>
          <li><a href="help.php">Help</a></li>
        </ul>
      </div>
    </div>
  </nav>


    <div class="col-xs-12 main">
      <div class="row">
        <div class="col-xs-12 map" id="map" style="margin-bottom:20px;">
        </div>

      </div>

<div class="container">

  <?php include 'report_access.php'; ?>
 <h2 class="sub-header">Reports</h2>
 <div class="panel panel-primary filterable">
      <div class="panel-heading" style="padding:25px;">

          <div class="dropdown">

       </div>

          <div class="pull-right" style="margin-top:-15px;">
              <button class="btn btn-default btn-sm btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
          </div>
      </div>

                  <table class="table" >
                      <thead>
                          <tr class="filters">
                              <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                              <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                              <th><input type="text" class="form-control" placeholder="Time" disabled></th>
                              <th><input type="text" class="form-control" placeholder="Latitude" disabled></th>
                              <th><input type="text" class="form-control" placeholder="Longtitude" disabled></th>
                          </tr>
                      </thead>
                      <tbody>




        		<?php
            $output='';

        					for ($i=0; $i < count($all) ; $i++) {
                    $output .="<tr>";

                  for ($j=0; $j < 5 ; $j++) {
        					$output .= "<td>" .$all[$i][$j]. "</td>";
        				  }
                  			$output .= "</tr>";
              }
              	echo $output;
      				?>

                      </tbody>
                  </table>
              </div>

<br><br>
<div >


    <div class="col-md-6">
        <div id="donut-example" style="height: 250px;"></div>
    </div>
    <div class="col-md-6" style="padding-bottom:50px;z-index:1;">
        <div id="bar-example" style="height: 250px;"></div>
    </div>
</div>

</div>
</body>


</html>
 <script type="text/javascript" src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolqrs1RmBOGIJIu4rIe4SJFA6CB1lI58&callback=initMap"></script>
<script src="js/bootstrap-select.min.js" charset="utf-8"></script>
<script src="js/chart.js" charset="utf-8"></script>
<script type="text/javascript">

    var safeArray=<?php echo json_encode( $safe ) ?>;
		var dangerArray= <?php echo json_encode( $danger ) ?>;


 </script>
<script src="js/maps-reports.js" charset="utf-8"></script>
<script src="js/filter.js" charset="utf-8"></script>
