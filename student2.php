<html>
    <head>
        <title>Update Page</title>
    </head>
    <body>
        <center>
            <?php
	
			
           
          
     include 'dbcon.php';
	 $conn = mysqli_connect("localhost","root","","student_db");
		
         
		if($_POST['update'])
		{
			
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $gender = $_REQUEST['gender'];
            $stream = $_REQUEST['stream'];
            $remark = $_REQUEST['remark'];
            $state = $_REQUEST['state'];

           
			$id = $_REQUEST['id'];
			

		$sql = "UPDATE regd SET name='$name',email='$email',phone='$phone',gender='$gender',
		stream='$stream',remark='$remark',state='$state' WHERE id='$id' ";
             
             $query_run = mysqli_query($conn,$sql);
             if($query_run){
             echo "Data updated";
             }
			 else{
				echo "Failed to update";
			 }
            
			}


             ?>


           
        </center>
    </body>
</html>