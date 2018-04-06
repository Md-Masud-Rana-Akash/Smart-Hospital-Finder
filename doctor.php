<div id="add" style="margin: 0px auto; width: 500px;padding: 50px;">

    <div style="margin: 0px auto; width: 500px;padding: 80px;">

        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#addDoc" role="tab">Add Doctor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#removeDoc" role="tab">Remove Doctor</a>
            </li>
        </ul>
        <br>

        <div class="tab-content">
            <div class="tab-pane active" id="addDoc" role="tabpanel">

                <?php include('dbconnect.php');
        if (isset($_POST['submit'])) {

            @$Specialist =strip_tags($_POST['Specialist']);
            $Off_Day=strip_tags($_POST['offday']);
            $doctorName=strip_tags($_POST['doctorName']);
            $degree=strip_tags($_POST['degree']);
            $email=strip_tags($_POST['email']);
            $visitingHour=strip_tags($_POST['visitingHour']);
            $contactNumber=strip_tags($_POST['contactNumber']);
            $visitingFee=strip_tags($_POST['visitingFee']);
            $HospitalId=$userRow['HospitalId'];
            $Specialist=$DBcon->real_escape_string($Specialist);
            $Off_Day=$DBcon->real_escape_string($Off_Day);
            $doctorName=$DBcon->real_escape_string($doctorName);
            $degree=$DBcon->real_escape_string($degree);
            $email=$DBcon->real_escape_string($email);
            $visitingHour=$DBcon->real_escape_string($visitingHour);
            $contactNumber=$DBcon->real_escape_string($contactNumber);
            $visitingFee=$DBcon->real_escape_string($visitingFee);
            
            $check_email=$DBcon->query("SELECT Email FROM doctor WHERE Email='$email'");
            $count=$check_email->num_rows;
            
            if($Specialist) {
                if ($count==0) {
                    echo $Off_Day;
                    $query="INSERT INTO doctor(DoctorName,Degree,Visiting_Hour,Email,Contact_Number,Fee,Hospital_HospitalId,Specialist,Off_Day) VALUES('$doctorName','$degree','$visitingHour','$email','$contactNumber','$visitingFee','$HospitalId','$Specialist','$Off_Day')";
                    if ($DBcon->query($query)) {
                        $msg="<div class='alert alert-success'>
        <span class='glyphicon glyphicon-info-sign'></span>&nbsp;
                        successfully registered ! </div>";

                    }
                    else {
                        $msg="<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>&nbsp;
                        error while registering ! </div>";

                    }
                }
                else {
                    $msg="<div class='form-group alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>&nbsp;
                    sorry email already taken ! </div>";

                }
            }
            else {
                $msg="<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>&nbsp;
                Please select the Specialisty ! ! ! </div>";

            }
            $DBcon->close();
        }

?>

                <form action="doctor.php" method="post">
                    <?php if(isset($msg)) {
                     echo $msg;
                    }

             ?>
                    <div class="form-group">
                        <label for="fistname" class="label label-info">Doctor Name</label>
                        <input type="text" required="" class="form-control" name="doctorName">
                    </div>
                    <div class="form-group">
                        <label for="degree" class="label label-info">Degree</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" name="degree" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="visitingHour" class="label label-info">Visiting Hour</label>
                        <input type="text" required="" class="form-control" name="visitingHour" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="email" class="label label-info">Email</label>
                        <input type="text" required="" class="form-control" name="email" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="contactNumber" class="label label-info">Contact Number:</label>
                        <input type="text" required="" class="form-control" name="contactNumber" placeholder="">
                    </div>
                    <!--<div class="form-group">
                                    <label for="image">Picture:</label>
                                    <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        </div>-->
                    <div class="form-group">
                        <label for="visitingFee" class="label label-info">Visiting Fee</label>
                        <input type="text" required="" class="form-control" name="visitingFee" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="offday" class="label label-info">Off Day</label>
                        <input type="text" required="" class="form-control" name="offday" placeholder="">
                    </div>
                    <div class="form-group ">
                        <label for="Specialist" class="label label-info">Specialist</label>
                           <label for="username" id="usernameError" class="label label-warning"></label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Specialist" value="Cancer">Cancer Specialist</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Specialist" value="Child">Child Specialist</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Specialist" value="Dental">Denatl Specialist</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Specialist" value="Eye">Eye Specialist</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Specialist" value="Heart">Heart Specialist</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Specialist" value="Kidney">Kidney Specialist</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Specialist" value="Surgery">Surgery Specialist</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Specialist" value="Medicine">Medicine Specialist</label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Specialist" value="ENT">Ent Specialist</label>
                            </div>
                    </div>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            


<?php include('dbconnect.php');

        if (isset($_POST['remove'])) {
        $email=strip_tags($_POST['email']);
        $email=$DBcon->real_escape_string($email);

        $check_email=$DBcon->query("SELECT Email FROM doctor WHERE Email='$email'");
            $count=$check_email->num_rows;
            
                if ($count==1) {
                  $query = "DELETE FROM doctor WHERE Email='$email'";
                    
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




            <div class="tab-pane" id="removeDoc" role="tabpanel">
                <form action="" method="post">
                    <?php if(isset($msg)) {
                     echo $msg;
                    } ?>
                    <div class="form-group">
                        <label for="docid">Email:</label>
                        <input type="text" class="form-control" name="email" placeholder="email">
                    </div>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" name="remove" class="btn btn-primary">Remove</button>
                </form>
            </div>
        </div>
    </div>
</div>