<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$database="chatbot";

// Create connection
//$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
//if (!$conn) {
  //die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";


  $conn = mysqli_init();
 mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
 mysqli_real_connect($conn, "mysqlchat.mysql.database.azure.com", "sakshi","mayuri@2023", "chatbot", 3306, MYSQLI_CLIENT_SSL);
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully";
 ?> 
