<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Result</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">


    <style>
      /*tr,td{
      border-top: 1px solid #133375;
      }*/

      * {
            box-sizing: border-box;
        }

        
        .column1{
            float: left;
            width: 20%;
            padding: 10px;
            height: 150px; 
        }

         .column2{
            float: left;
            width: 45%;
            padding: 10px;
            height: 150px; 
        }
         .column3{
            float: left;
            width: 18%;
            padding: 10px;
            height: 150px; 

        }


        .column22{
            float: left;
            width: 25%;
            padding: 10px;
            height: 150px; 
        }
         .column33{
            float: left;
            width: 30%;
            padding: 10px;
            height: 150px; 

        }

         .column4{
            float: left;
            width: 17%;
            padding: 10px;
            height: 150px; 
        }

          .column44{
            float: left;
            width: 25%;
            padding: 10px;
            height: 150px; 
        }


        .row:after {
            content: "";
            display: table;
            clear: both;

            }

       .area{
            position: absolute;
            left: 100px;
            top: 150px;
           }
           
    </style>
</head>

<body style="background: #f9f9f9">
    <?php include"inc/nav.php";?>
    
<h1>Search Result</h1>

          



<div class="container" style="width:900px">


<?php 


 session_start();
 include('dbconnect.php');

 if (isset($_POST['submit'])) {

    $divison = $_POST['divison'];
    $role = $_POST['role'];
    $type = $_POST['type'];
  

  if($role == "Hospital"){ $_SESSION['type'] = $type; ?>

                <br>  
                <form action="fetch_area.php" method="POST">
                    <div class="col-lg-6" style="margin-left: 190px">
                        <div class="input-group">
                          <input type="text" name="area" class="form-control" required="" placeholder="select area...">
                          
                          <span class="input-group-btn">
                            <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Search</button>
                          </span>
                      </div></div></form>
                <br>


       <?php $query = "SELECT * FROM hospital WHERE  Division='$divison' and DeptName like'%$type%' ";
        $result = mysqli_query($DBcon, $query);
        $total = mysqli_num_rows($result);
        echo $total." result found"."<br>"."<br>";

        if ($total > 0){
        
        while($row=mysqli_fetch_assoc($result)){  
            
            // $HosId = $row["HospitalId"];
            // $_SESSION['HosId'] = $HosId;
        

           ?> 
              <div class="row" style="border-style: solid;border-width: 1px;border-color: #7ab2dd";>

                    
               <div class="column1">
                    <img src="hospital2.png" height="130" width="130">
                </div>  <br>

            <div class="column2" style="background-color:#EAF4F7">
                    
             <?php         
                echo '<i class="far fa-hospital"></i>'.' '."<b>".$row["HospitalName"]."</b>";echo"<br>";
                echo '<i class="fas fa-envelope"></i>'." ".$row["Email"];echo"<br>";
                echo '<i class="fas fa-phone"></i>'." ".$row["Hotline"];echo"<br>"; 
                echo '<i class="fas fa-check-square"></i>'.' '.$row["DeptName"];echo"<br>";
        
                ?> 

            </div>  <br>

         <div class="column3" style="background-color:#f1ffba;">
                    

              <?php 
                   echo '<i class="fas fa-map-marker-alt"></i>'.' '.$row["Address"];echo"<br>";
                   echo $row["Division"];echo"<br>";?> 
                  
            </div>   <br>

                 <div class="column4" style="background-color:#D2EAF2;">
                    
                    
                <?php 
                       $HosId = $row["HospitalId"];
                       echo $HosId;
                    echo"<form action='hosDoctor.php?HosId=$HosId' method='POST'><button type='submit' name='submit' style='background-color: #343A40' class='btn btn-info'>View doctors</button>  
                    </form>"; 

                    // $HosId = $row["HospitalId"];
                    // $_SESSION['HosId'] = $HosId;

                   

                    ?>
                  </div>

                </div>
               <br>
             <?php  } ?>
     

      <?php  } 

      else echo "Sorry no result found"."<br>";?>

  <?php  } 






        else if ($role == "Doctor"){  $_SESSION['type'] = $type;  ?>

                <br>  <form action="areaSearch.php" method="POST">
                <div class="col-lg-6" style="margin-left: 190px">
                    <div class="input-group">
                      <input type="text" name="area" class="form-control" placeholder="select area...">
                      <span class="input-group-btn">
                        <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Search</button>
                      </span>
                  </div></div></form>


        <br>

                    



     <?php $query = "SELECT * FROM doctor INNER JOIN hospital ON hospital.HospitalID = doctor.Hospital_HospitalId and Specialist like '%$type%' ";
            $result = mysqli_query($DBcon, $query);
            $total = mysqli_num_rows($result);
            echo $total." result found"."<br>";

            if ($total > 0){
             
            while($row=mysqli_fetch_assoc($result)){ 

                ?>

             <div class="row" style="border-style: solid;border-width: 1px;border-color: #7ab2dd";>
                <div class="column1">
                    <img src="doctor2.png" height="130" width="130">
                </div>  <br>

             <div class="column22" style="background-color:#FFFFFF">

               <?php
                         
                    echo '<i class="fas fa-user-md"></i>'.' '.$row["DoctorName"]; echo"<br>";
                    echo '<i class="fas fa-graduation-cap"></i>'.' '.$row["Degree"];echo"<br>";
                    echo '<i class="far fa-calendar-times"></i>'.' '.$row["Visiting_Hour"];echo"<br>";
                    echo '<i class="fas fa-mobile-alt"></i>'.' '.$row["Contact_Number"];echo"<br>"; ?>

                  </div>   <br>

                 <div class="column33" style="background-color:#eaf4f7;">

                     <?php
                         echo '<i class="fas fa-stethoscope"></i>'.' '.'<b>'."Specialist: ".'</b>'.' '.$row["Specialist"]."<br>"; 
                         echo '<i class="fab fa-cc-amazon-pay"></i>'.' '.'<b>'."Visiting-Fee: ".'</b>'.' '.$row["Fee"]."<br>"; 
                         echo '<i class="fas fa-window-close"></i>'.' '.'<b>'."Off-Day: ".'</b>'.' '.$row["Off_Day"]."<br>";
                         ?> 
                      
                 </div>  <br>

                 <div class="column44" style="background-color:#d2eaf2;">
                    <?php 
                        echo '<i class="far fa-hospital"></i>'.' '."<b>".$row["HospitalName"]."</b>";echo"<br>";
                        echo '<i class="fas fa-map-marker-alt"></i>'.' '. $row["Address"];echo"<br>"; ?>

                 </div>

            </div>
                  <br>
               
            <?php } 
                
             }   

       else{
             echo "sorry no result found";
          }


      }

 ?>

<?php 

        echo "Fetched data successfully\n";
   
   mysqli_close($DBcon); 

 } ?>

     </div>

    </body>
</html>