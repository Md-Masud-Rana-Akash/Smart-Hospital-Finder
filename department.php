<?php

    // ini_set('display_errors', 1);
    // ini_set('log_errors',1); 
    // error_reporting(E_ALL);
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    

include('dbconnect.php');

if(isset($_POST['submit'])) {
    $HospitalId = $userRow['HospitalId'];
    // echo $HospitalId;
    $DeptName = $_POST["DeptName"];
    $dpName = implode(",",$DeptName);

    
          $query = "INSERT INTO department (Hospital_HospitalId, DeptName) VALUES ('$HospitalId', '$dpName')";

          $result = mysqli_query($DBcon, $query);

        if ($result) {
            $msg = "<div class='alert alert-success'>
                  <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
                </div>";
          }
          else {
            $msg = "<div class='alert alert-danger'>
                  <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while inserting !
                </div>";
          }
          
        //    mysqli_close($DBcon);        
  }
  
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Departmentt</title>
</head>
<body>

<div class="container" style="margin-top:150px;text-align:center;font-family:Verdana, Geneva, sans-serif;font-size:15px;">
  <h3>Please Select Department's from the list</h3>

  <form  method="post">
  <!-- class="form-check-input position-static" -->
  <?php
            if(isset($msg)){
              echo $msg;
              // echo $dpName;
              //echo $result;
            }
            ?>
    <div class="checkbox">
      <label><input type="checkbox" name="DeptName[]" value="Cancer">Cancer</label>
    </div>

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

    <div class="form-group">
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
       </div>

  </form>

</div>
    
</body>
</html>