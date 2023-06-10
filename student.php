<html>
    <head>
        <title>Insert Page</title>
    </head>
    <body>
        <center>
            <?php
            error_reporting(0);
           include 'dbcon.php';
            $conn = mysqli_connect("localhost","root","","student_db");
         
    
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $gender = $_REQUEST['gender'];
            $stream = $_REQUEST['stream'];
            $remark = $_REQUEST['remark'];
            $state = $_REQUEST['state'];

           
           $sql = "INSERT INTO regd (name,email,phone,gender,stream,remark,state)
             VALUES('$name','$email','$phone','$gender','$stream','$remark','$state')";
             
        
             $query_run = mysqli_query($conn,$sql);
             if($query_run){
             echo '<script>alert("Data Inserted")</script>';
             }
            


 mysqli_close($conn);
             ?>


           
        </center>
    </body>
</html>