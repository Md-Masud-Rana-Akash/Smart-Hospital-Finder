<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: login.php");
}

$query = $DBcon->query("SELECT * FROM hospital WHERE  HospitalId=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
  <!DOCTYPE>
  <html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome -
      <?php echo $userRow['Email']; ?>
    </title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
      crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="index.php">SHF</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="">Doctors</a>
            </li>
            <li>
              <a href="#add">Add</a>
            </li>
            <li>
              <a href="#add">Remove</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#">
                <span class="glyphicon glyphicon-user"></span>&nbsp;
                <?php echo $userRow['HospitalName']; ?>
              </a>
            </li>
            <li>
              <a href="logout.php?logout">
                <span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>





    <!-- php include 'department.php';?> -->

    <div class="container" style="margin-top:150px;text-align:center;font-family:Verdana, Geneva, sans-serif;font-size:35px;">
      <p>Doctor Add or Remove</p>
    </div>

    <?php include 'doctor.php';?>


  <?php include"inc/footer.php";?>

  </body>

  </html>