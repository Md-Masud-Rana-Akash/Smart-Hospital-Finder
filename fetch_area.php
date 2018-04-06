<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Result</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>

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

         .column4{
            float: left;
            width: 17%;
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

<body style="background: #EFEFEF">
    <?php include"inc/nav.php";?>
    
<h1>Search Result</h1>

          



<div class="container" style="width:900px">

<?php session_start();
 include('dbconnect.php');

 if (isset($_POST['submit'])) {

    $area = $_POST['area'];
    $type = $_SESSION['type'];
   
  


        $query = "SELECT * FROM hospital WHERE DeptName like'%$type%' and Address like'%$area%' ";
        $result = mysqli_query($DBcon, $query);
        $total = mysqli_num_rows($result);
        echo $total." result found"."<br>"."<br>";

        if ($total > 0){
        
        while($row=mysqli_fetch_assoc($result)){
            
           ?> 
              <div class="row" style="border-style: solid;border-width: 1px;border-color: #7ab2dd";>

                    
               <div class="column1">
                    <img src="hospital2.png" height="130" width="130">
                </div>  <br>

            <div class="column2" style="background-color:#FFFFFF">
                    <!-- <h2>Column 2</h2>
                    <p>Some text..</p> -->
             <?php         
                echo "<b>".$row["HospitalName"]."</b>";echo"<br>";
                echo $row["Email"];echo"<br>";
                echo $row["Hotline"];echo"<br>";
                echo $row["DeptName"];echo"<br>";?> 
            </div>  <br>

         <div class="column3" style="background-color:#eaf4f7;">
                    

              <?php 
                   echo $row["Address"];echo"<br>";
                   echo $row["Division"];echo"<br>";?> 
                  
            </div>   <br>

                 <div class="column4" style="background-color:#d2eaf2;">
                    
                    
                <?php 
                    echo"<button type='submit'style='background-color: #ffd344' class='btn btn-info'>View doctors</button>"; ?>
                  </div>

                </div>
               <br>
             <?php  } ?>
     

      <?php  } 

      else echo "Sorry no result found";


        echo "Fetched data successfully\n";
   
   mysqli_close($DBcon); 

 } ?>

     </div>

    </body>
</html>