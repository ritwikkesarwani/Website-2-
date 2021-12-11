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

   $id=$_POST["id_num"];
   $name=$_POST["name"];
   $mail=$_POST["email"];
   $phone=$_POST["phone"];
   $date=$_POST["date"];   
   $time=$_POST["time"];
   $people=$_POST["people"];
   $message=$_POST["message"];   

   //echo $name . $mail . $phone . $adult . $children . $checkin . $checkout . $room . $comments;

   $sql1 = "DELETE FROM restaurant where id=$id";
   $sql2 = "INSERT INTO restaurant (name,email,phone,day,time,qty,message) values (\"".$name. "\",\"". $mail ."\",". $phone .",\"". $date ."\",\"". $time ."\",". $people .",\"". $messgae ."\")";

   //echo $sql;

   if ($conn->query($sql1) === TRUE) {
      echo "record deleted successfully";
      header("Location: reservations.html");
    } else {
      echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
    if ($conn->query($sql2) === TRUE) {
      echo "New record updated successfully";
      header("Location: reservations.html");
    } else {
      echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
    
    $conn->close();
   
?>