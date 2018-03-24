<?php

	 $DBhost = "localhost";
	 $DBuser = "root";
	 $DBpass = "";
	 $DBname = "mydb";
	 
	 // $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
	 $DBcon = mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);
    
      if ($DBcon->connect_error) {
	            die("Connection failed: " . $DBcon->connect_error);
	        }
        // else
        // {
        //    
        // }
