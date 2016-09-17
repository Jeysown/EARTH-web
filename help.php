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
  <a class="navbar-brand" href="maps.php" style="padding: 0px 15px;"><img src="images/logo.png" alt="" width="26%;"/></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="maps.php" onclick="showEarthquakes();backtotop();">Valley Fault System</a></li>
          <li><a href="maps.php"  onclick="showEvacuation();backtotop();">Evacuation Areas</a></li>
          <li><a href="maps.php" onclick="earthquake();" style="cursor: pointer;">Earthquakes</a></li>
          <li><a href="reports.php">Reports</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
    </div>
  </nav>


    <div class="col-xs-12 main" style="margin-bottom:20px;">
      <div class="container">
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading" style="padding:25px;">
               </div>
                            <table class="table" style="overflow-y:scroll;">
                                <thead>
                                    <tr class="filters" style="font-size:30px;">
                                        <th style="text-align:center;">Legend</th>
                                        <th style="text-align:center;">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="col-lg-4" style="text-align:center;"><img src="images/safe.png" alt="" style="height:55px;"/></td>
                                    <td style="text-align:justify;font-size:16px;" class="col-lg-8">Blue indicator indicates that a certain forest/protected area and it's vicinity has a good to average stability with regards to the standard of the forest based on the reports that are coming from the people in the said place.
                                    <br><br>
                                     <b>Ex.</b> Some supposedly extinct happens to be not extinct yet, trees are growing, or any positive things that has a good effect to the forest.</td>
                                  </tr>
                                  <tr>
                                    <td style="text-align:center;"><img src="images/danger.png" alt="" style="height:55px;"/></td>
                                    <td style="text-align:justify;font-size:16px;">Orange - Orange indicator indicates that a certain forest/protected area has some threat of abuse, destruction or illegel loggers or even miners.
                                    <br><br>  <b>Ex.</b> Some issues like over cutting of trees, illegal hunting of animals, unauthorized plant or workshop within the forest.
                                    </td>

                                  </tr>
                                  <tr>
                                    <td style="text-align:center;"><img src="images/house.png" alt="" style="height:55px;"/></td>
                                    <td style="text-align:justify;font-size:16px;">Red - Red indicator indicates that a certain forest/protected are has an urgent need of rescue or action from authority within 12-24 hours.
                                    <br><br> <b>Ex.</b>Forest Fire, Deforestation effects like landslides and flash floods.</td>
                                  </tr>
                                  <tr>
                                    <td style="text-align:center;"><img src="images/earthquake-3.png" alt="" style="height:55px;"/></td>
                                    <td style="text-align:justify;font-size:16px;">Red - Red indicator indicates that a certain forest/protected are has an urgent need of rescue or action from authority within 12-24 hours.
                                    <br><br> <b>Ex.</b>Forest Fire, Deforestation effects like landslides and flash floods.</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>

      </div>
      </div>



</div>
</body>


</html>
 <script type="text/javascript" src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAolqrs1RmBOGIJIu4rIe4SJFA6CB1lI58&callback=initMap"></script>
<script src="js/bootstrap-select.min.js" charset="utf-8"></script>
