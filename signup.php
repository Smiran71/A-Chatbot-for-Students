<?php
include("conn.php");
if(isset($_POST["signup"]))
{
    $id=$_POST["Id"];
    $userid=$_POST["User_id"];
    $first_name=$_POST["First_name"];
    $middle_name=$_POST["Middle_name"];
    $last_name=$_POST["Last_name"];
    $address=$_POST["Address"];
    $city=$_POST["City"];
    $mobile_no=$_POST["Mobile_no"];
    $email=$_POST["Email"];
    $role=$_POST["Role"];
    $password=$_POST["Password"];
//    echo"id=".$id;
//    echo"name=".$name;
//    echo"user=".$user;
//    echo"pass=".$pass;
    $sql = "INSERT INTO user(Id, User_id, First_name, Middle_name,Last_name, Address, City,Mobile_no,Email,Role,Password) VALUES ($id,'$userid','$first_name','$middle_name','$last_name','$address','$city','$mobile_no','$email','$role','$password')";
    echo"<br>".$sql;
if (mysqli_query($conn, $sql)) {
  echo "User created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
?>
<html>
<head>
    <tital>Sign up Page</tital>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
</body>
<div class="span3">
    <h2>Sign Up</h2>
    <form action="" method="post">
    <label>Id</label>
    <input type="text" name="Id" class="span3">
    <label>User_id</label>
    <input type="text" name="User_id" class="span3">
    <label>First_name</label>
    <input type="text" name="First_name" class="span3">    
    <label>Middle_name</label>
    <input type="text" name="Middle_name" class="span3">
    <label>Last_name</label>
    <input type="text" name="Last_name" class="span3">
    <label>Address</label>
    <input type="text" name="Address" class="span3">
    <label>City</label>
    <input type="text" name="City" class="span3">
    <label>Mobile_no</label>
    <input type="number" name="Mobile_no" class="span3">
    <label>Email</label>
    <input type="text" name="Email" class="span3">
    <label>Role</label>
    <input type="text" name="Role" class="span3">
    <label>Password</label>
    <input type="text" name="Password" class="span3">
    <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
    <input type="submit" value="Sign up" class="btn btn-primary pull-right" name="signup">
    <div class="clearfix"></div>
    </form>
</div>
    </html>