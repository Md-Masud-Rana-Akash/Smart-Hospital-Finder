<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
  header("Location: home.php");
}
require_once 'dbconnect.php';

if(isset($_POST['submit'])) {
  
  $hosname = strip_tags($_POST['hosname']);
  $email = strip_tags($_POST['email']);
  $upass = strip_tags($_POST['password']);
  // $specialist = strip_tags($_POST['specialist']);
  $mobile = strip_tags($_POST['mobile']);
  $divison = strip_tags($_POST['divison']);
  $address = strip_tags($_POST['address']);
  $DeptName = $_POST["DeptName"];
  $dpName = implode(",",$DeptName);

  $hosname =$DBcon->real_escape_string($hosname);
  $email = $DBcon->real_escape_string($email);
  $upass = $DBcon->real_escape_string($upass);
  // $specialist = $DBcon->real_escape_string($specialist);
  $mobile = $DBcon->real_escape_string($mobile);
  $divison = $DBcon->real_escape_string($divison);
  $address = $DBcon->real_escape_string($address);
  // $dpName = $DBcon->real_escape_string($dpName);

  
 $hashed_password = password_hash($upass, PASSWORD_DEFAULT);
  
  $check_email = $DBcon->query("SELECT Email FROM hospital WHERE Email='$email'");
  $count=$check_email->num_rows;
  
  if ($count==0) {
    
    $query = "INSERT INTO hospital(HospitalName,Division,Address,Email,Hotline,Password,DeptName) VALUES('$hosname','$divison','$address','$email','$mobile','$hashed_password', '$dpName')";

    if ($DBcon->query($query)) {
      $msg = "<div class='alert alert-success'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
          </div>";
    }
    else {
      $msg = "<div class='alert alert-danger'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
          </div>";
    }
    
  } else {
    
    
    $msg = "<div class='form-group alert alert-danger'>
          <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
        </div>";
      
  }
  
  $DBcon->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/bootstrap-lumen.css">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- <link rel="stylesheet" href="contents/css/jquery-ui.css">
  <link rel="stylesheet" href="contents/css/toastr.css">
  <link rel="stylesheet" href="contents/css/datatables.min.css"> -->

  <style type="text/css">

    .label{
      font-size: 14px;
    }

    h1 {
      text-align: center;
    }


  </style>
     
</head>


<body style="background-color: #F4E8FF">
  <nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SHF</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
  </div>
</nav>


  <h1>Register</h1>

  <br>
  <div class="container col-md-offset-4">
    <div class="form col-xs-4">
      <form class="signin-form" method="post" id="register">
      
        
          <?php
            if(isset($msg)){
              echo $msg;
            }
            ?>

      <div class="form-group ">
        <label for="hosame" class="label label-info">Hospital Name</label>
        <input type="text" name="hosname" class="form-control" msg="please enter the name" id="name" required>
        <!-- <label for="username" id="usernameError" class="label label-warning"></label> -->
      </div>

       <div class="form-group">
                     <label for="divison" class="label label-info" >Division</label>
                     <select class="form-control" id="sel1" name="divison">
                        <option>Select Option</option>
                        <option>Barisal Division</option>
                        <option>Chittagong Division</option>
                        <option>Dhaka Division</option>
                        <option>Khulna Division</option>
                        <option>Mymensingh Division</option>
                        <option>Rajshahi Division</option>
                        <option>Rangpur Division</option>
                        <option>Sylhet Division</option>
                     </select>
                  </div>

        <div class="form-group">
          <label for="address" class="label label-info">Address</label>
          <textarea class="form-control" id="exampleTextarea" rows="3" name="address" required=""></textarea>
        </div>

      <div class="form-group ">
        <label for="email" class="label label-info">Email</label>
        <input type="text" name="email" class="form-control" msg="please enter an valid email" id="email" required="">
        <!-- <label for="username" id="usernameError" class="label label-warning"></label> -->
      </div>

       <div class="form-group ">
        <label for="mobile" class="label label-info">Hotline</label>
        <input type="text" name="mobile" class="form-control" name="mobile" msg="please enter your conatact number" id="mobile" required="">
        <!-- <label for="username" id="usernameError" class="label label-warning"></label> -->
      </div>

      <!-- <div class="form-group">
        <label for="specialist" class="label label-info">Specialist</label>
        <input type="text" name="specialist" msg="please enter the specialists of your hospital" name="specialist" class="form-control" id="password" required=""> </div> -->

        <div class="form-group ">
        <label for="email" class="label label-info">Available Departments</label>
       
        <!-- <label for="username" id="usernameError" class="label label-warning"></label> -->


    <div class="checkbox">
      <label><input type="checkbox" name="DeptName[]" value="Children">Children</label>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="DeptName[]" value="Cardiology">Cardiology</label>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="DeptName[]" value="Dental">Dental</label>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="DeptName[]" value="Eye">Eye</label>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="DeptName[]" value="Skin">Skin</label>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="DeptName[]" value="Medicine">Medicine</label>
    </div>
    
    <div class="checkbox">
      <label><input type="checkbox" name="DeptName[]" value="Other">Other</label>
    </div>
    </div>


      <div class="form-group">
        <label for="password" class="label label-info">Password</label>
        <input type="password" name="password" msg="please enter a password" class="form-control" id="password" required=""> </div>

    
        <!-- <label for="password" id="passwordError" class="label label-warning"></label>
      </div> -->  

       <div class="form-group">
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
       </div>
        <p>login from here <b><a href="login.php" style="">Login</a></b></p>


    </form>
    </div>
  </div>
  <?php "<br>"  ?>
  <?php include"inc/footer.php";?>
</body>
</html>



  