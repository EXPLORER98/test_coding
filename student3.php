<html>
    <head>
        <title>Insert Page</title>
    </head>
    <body>
        <center>
            <?php
           
           include 'dbcon.php';
            $conn = mysqli_connect("localhost","root","","student_db");
         
    
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $state = $_REQUEST['state'];
            $comment = $_REQUEST['comment'];

           
           $sql = "INSERT INTO student (name,email,phone,state,comment)
             VALUES('$name','$email','$phone','$state','$comment')";
             
             $query_run = mysqli_query($conn,$sql);
             if($query_run){
             echo '<script>alert("Data Inserted")</script>';
             }
            
             ?>


           
        </center>
    </body>
</html>