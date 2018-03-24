<?php
//fetch.php
if(isset($_POST["action"]))
{
 $DBcon = mysqli_connect("localhost", "root", "", "mydb");
 $output = '';


 if($_POST["action"] == "role"){
  $query = "SELECT type FROM search WHERE role = '".$_POST["query"]."' GROUP BY type";
  $result = mysqli_query($DBcon, $query);
  $output .= '<option value="">Select type</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["type"].'">'.$row["type"].'</option>';
  }
 }


 echo $output;
}
?>