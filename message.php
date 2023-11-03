<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "chatbot";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// include("conn.php")
    $conn = mysqli_init();
 mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
 mysqli_real_connect($conn, "mysqlchat.mysql.database.azure.com", "sakshi","mayuri@2023", "chatbot", 3306, MYSQLI_CLIENT_SSL);
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully";
// Assuming you have received the user's question and stored it in $userQuestion
$userQuestion = mysqli_real_escape_string($conn, $_POST['text']);  // Make sure to sanitize user input

// Use the user's question in the SQL query
$query = "SELECT Answers FROM chatbot_questionaries WHERE LOWER(questions) = LOWER('$userQuestion')";
$run_query = mysqli_query($conn, $query);

// Check if the query was successful
if ($run_query) {
    // Check if there are rows returned
    if (mysqli_num_rows($run_query) > 0) {
        $fetch_data = mysqli_fetch_assoc($run_query);
        $reply = $fetch_data['Answers'];
        echo $reply;
    } else {
        echo "Sorry, can't be able to understand you!";
    }
} else {
    echo "Query failed: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

?>
