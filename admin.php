<div id="add" style="margin: 0px auto; width: 500px;padding: 50px;">

    <div style="margin: 0px auto; width: 500px;padding: 80px;">

     
        <br>


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
              <a href="">Hospital</a>
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

    <div style="margin-top:150px;text-align:center;font-family:Verdana, Geneva, sans-serif;font-size:25px;">
      <p>Remove Hospital</p>
    </div>

    

<?php include('dbconnect.php');

        if (isset($_POST['remove'])) {
        $email=strip_tags($_POST['email']);
        $email=$DBcon->real_escape_string($email);

        $check_email=$DBcon->query("SELECT Email FROM hospital WHERE Email='$email'");
            $count=$check_email->num_rows;
            
                if ($count==1) {
                  $query = "DELETE FROM hospital WHERE Email='$email'";
                    
                    if ($DBcon->query($query)) {
                        $msg="<div class='alert alert-success'>
        <span class='glyphicon glyphicon-info-sign'></span>&nbsp;
                        successfully removed ! </div>";

                    }
                    else {
                        $msg="<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>&nbsp;
                        error while removing ! </div>";

                    }


                 } 

            else {
                        $msg="<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>&nbsp;
                        error while removing ! </div>";
                    }

          $DBcon->close();
          
          }              
  ?>

                     

        
            <div>
                <form action="" method="post">
                    <?php if(isset($msg)) {
                     echo $msg;
                    } ?>
                    <div class="form-group">
                        <label for="email" class="label label-info">Email</label>
                        <input type="text" required="" class="form-control" name="email" placeholder="">
                    </div>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" name="remove" class="btn btn-primary">Remove</button>
                </form>
            </div>
           



</div>
</div>






  </body>

  </html>