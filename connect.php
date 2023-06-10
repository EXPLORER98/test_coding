<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$comment = $_POST['comment'];

$sql = "INSERT INTO student(email,name,phone,state,comment)
VALUES('$email','$name','$phone','$state','$comment')";

$query_run = mysqli_query($conn,$sql);
?>

<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        
        <u><h1><center>Registration Form</center></h1></u>
        <form action="" method="post" name="myForm">
            <table>
                <tr>
                    <td>Email ID</td>
                    <td><input type="email" name="email" placeholder="Enter Email"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="Enter name"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="phone" name="phone"></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><input type="text" name="state"></td>
                </tr>
                <tr>
                    <td>
                        Comment
                    </td>
                    <td><input type="text" name="comment"></td>
                </tr>
                <tr>
                    <td align="right">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>