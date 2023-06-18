<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>


<body>
   <?php
  
   error_reporting(0);
   include("dbcon.php");
    $id = $_GET['id'];

    $query = "SELECT * FROM regd WHERE id='$id'";
    $data = mysqli_query($conn, $query);
    
     $row = mysqli_fetch_array($data); 
   
   ?>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="border-shadow-sm text-center m-4">
        <div class="bg-info w-50"></div>
    </div>

    <form action="student2.php" method="post">


        <input type="hidden" name="id"value="<?php echo $row['id']; ?>">

        <div class="container" my-4>
            <h2>Update Student Details</h2>
            <div class=" w-50">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" value="<?php echo $row['name']; ?>" name="name" class="form-control"  id="exampleFormControlInput1"
                    placeholder="your name" required>
            </div>
            <div class=" w-50">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" id="exampleFormControlInput2"
                    placeholder="name@example.com">
            </div>
            <div class=" w-50">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input type="phone" name="phone" class="form-control"  value="<?php echo $row['phone']; ?>" id="exampleFormControlInput3"
                    placeholder="your phone number">
            </div>
            <div>
                <div class=" w-50">
                    <label for="exampleFormControlInput1" class="form-label">Gender:</label><br>
                </div>
                <input type="radio" name="gender" value="male"
                <?php
                 if($row['gender'] == 'male') 
                 {
                    echo "checked";
                 }
                     ?>
                >Male
                <input type="radio" name="gender" value="female"
                <?php
                 if($row['gender'] == 'female')
                 {
                    echo "checked";
                 }
                     ?>
                >Female
            </div>
            <div>
                <div class=" w-50">
                    <label for="stream"> Stream :</label><br>
                </div>
                <input type="checkbox" id="stream" name="stream" value="Science" 
                <?php 
                if($row['stream'] == 'Science')
                 {
                    echo "checked";
                }
                 ?>
                >
                <label for="stream"> Science</label>
                <input type="checkbox" id="stream1" name="stream" value="Arts" 
                <?php 
                if($row['stream'] == 'Arts')
                 {
                    echo "checked";
                }
                 ?>
                >
                <label for="stream" > Arts</label>
                <input type="checkbox" id="stream2" name="stream" value="Commerce"
                <?php 
                if($row['stream'] == 'Commerce')
                 {
                    echo "checked";
                }
                 ?>
                >
                <label for="stream" > Commerce</label>

            </div>

            <div class=" w-50">
                <label for="exampleFormControlTextarea1" class="form-label">Remark</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="remark" rows="3">
                <?php echo $row['remark']; ?>
                </textarea>
            </div>
            <div class="mb-3">
                <div class=" w-50">
                    <label for="state">State: </label>
            </div>
            </div>
            <div class="mb-3">
            <div class="w-50">
                
                <select name="state" class="form-select form-select-sm" >
                    
                    <option value="select">Select</option>
                    <option value="Andhra Pradesh" <?php if($row['state'] == 'Andhra Pradesh') {echo "selected";} ?> name="state">Andhra Pradesh</option>
                    <option value="Bihar" <?php if($row['state'] == 'Bihar') {echo "selected";} ?> name="state">Bihar</option>
                    <option value="Odisha" <?php if($row['state'] == 'Odisha') {echo "selected";} ?> name="state">Odisha</option>
            </div>
                </div>
                </select>
            </div>
            <br>
            <input type="submit" value="Update" name="update" class ="btn btn-primary">
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
    </form>
</body>

</html>