<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Result</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
      tr,td{
      border-top: 1px solid #133375;
}
       }
    </style>
</head>

<body>
    
<h1>Search Result</h1>
<div class="container" style="width:900px">
   
<?php
 include('dbconnect.php');

 if (isset($_POST['submit'])) {
    $divison = $_POST['divison'];
    $role = $_POST['role'];
    $type = $_POST['type'];
  

  if($role == "Hospital"){

        $query = "SELECT * FROM hospital WHERE  Division='$divison' and DeptName like'%$type%' ";
        $result = mysqli_query($DBcon, $query);
        $total = mysqli_num_rows($result);
        echo $total." result found"."<br>"."<br>"."<br>";

        if ($total > 0){
        echo '<div class="container" style="background-color: #EFEFEF" >';
            echo '<div class="jumbotron jumbotron-fluid ">';
           
        echo "<table>";
        while($row=mysqli_fetch_assoc($result)){
            
            echo "<tr>";
            echo "<td>";?> <img src="hospital2.png" height="130" width="130"> <?php echo "</td>";?>
             <?php 
              echo "<td>";         
                echo "<b>".$row["HospitalName"]."</b>"; echo"<br>";
                echo $row["Email"];echo"<br>";
                echo $row["Hotline"];echo"<br>";
                echo $row["DeptName"];echo"<br>";echo "</td>";

                echo "<td style='padding-left:30px'>"; echo $row["Address"];echo"<br>";echo $row["Division"];echo"<br>"; echo "</td>";
                echo "<td>"; echo"<button type='submit'style='background-color: #02A9B0' class='btn btn-primary'>View doctors</button>";echo "</td>";
             
            echo "</tr>";
            
            } 
            echo "</table>";
            
            echo "</div>";echo "</div>";
       }
       else{
             echo "sorry no result found";
          }

      }



  else if($role == "Doctor"){

        $query = "SELECT * FROM doctor INNER JOIN hospital ON hospital.HospitalID = doctor.Hospital_HospitalId and Specialist like'%$type%' ";
        $result = mysqli_query($DBcon, $query);
        $total = mysqli_num_rows($result);
        echo $total." result found"."<br>";

        if ($total > 0){
            echo '<div class="container" style="background-color: #EFEFEF" >';
            echo '<div class="jumbotron jumbotron-fluid ">';
        echo "<table>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>";?> <img src="doctor2.png" height="115" width="115"> <?php echo "</td>";?>

           <?php
             echo "<br>";
             echo "<td>";         
                echo $row["DoctorName"]; echo"<br>";
                echo $row["Degree"];echo"<br>";
                echo $row["Visiting_Hour"];echo"<br>";
                echo $row["Email"];echo"<br>";
                echo $row["Contact_Number"];echo"<br>";
             echo "</td>";

               
            echo "<td>"; 
                 echo $row["Specialist"];echo "Specialist";echo"<br>";
                 echo $row["Fee"];echo"<br>";
                 echo $row["Off_Day"];echo"<br>"; 
            echo "</td>";
             
            echo "</tr>";
            } 
            echo "</table>"; 
            echo "</div>";echo "</div>";
       }


   else{
         echo "sorry no result found";
      }


  }




else{
    echo "sorryyy";
}





        echo "Fetched data successfully\n";
   
   mysqli_close($DBcon);

 }

?>

     </div>

    </body>
</html>