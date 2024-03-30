<?php
   $servername = "localhost";#server
   $username = "raam";#username only 
   $password = "";#password incase
   $database = "user_data";#database name 

   $conn = new mysqli($servername,$username,$password,$database);
   
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   $Name = $_POST['Name'];
   $Phone = $_POST['Phone'];
   $address = $_POST['address'];
   $item = $_POST['item'];
   
   # inserting into database. 
   
   $sql = "INSERT INTO orders(Name, Phone, address, item) VALUES('$Name','$Phone','$address','$item')";
   #checking for connection requests.

   if ($conn->query($sql) === TRUE) {
      echo "Orders Placed successfully soon dispatching";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  // Close connection.
  $conn->close();