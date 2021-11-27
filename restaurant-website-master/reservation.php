<?php

   //echo htmlspecialchars($_POST["visitor_name"]);
   
   $url = "localhost:3306";
   $database = "test";
   $username = "noob";
   $password = "7WBT]9yJXdQ77_sl";	

   $conn = mysqli_connect($url, $username, $password, $database);
   if(!$conn) {
	die("Unable to connect: " . $conn->connect_error);
   }

   $name=$_POST["name"];
   $mail=$_POST["email"];
   $phone=$_POST["phone"];
   $date=$_POST["date"];   
   $time=$_POST["time"];
   $people=$_POST["people"];
   $message=$_POST["Message"];   

   //echo $name . $mail . $phone . $adult . $children . $checkin . $checkout . $room . $comments;

   $sql = "INSERT INTO restaurant values (\"".$name. "\",\"". $mail ."\",". $phone .",\"". $date ."\",\"". $time ."\",". $people .",\"". $messgae ."\")";

   //echo $sql;

   if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      header("Location: reservations.html");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
   
?>