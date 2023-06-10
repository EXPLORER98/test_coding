<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php
   
    include 'student.php';
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

    <form action="student.php" method="post">




        <div class="container" my-4>
            <h2>Registration form</h2>
            <div class="bg-info w-50">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                    placeholder="your name" required>
            </div>
            <div class="bg-info w-50">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput2"
                    placeholder="name@example.com">
            </div>
            <div class="bg-info w-50">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input type="phone" name="phone" class="form-control" id="exampleFormControlInput3"
                    placeholder="your phone number">
            </div>
            <div>
                <div class="bg-info w-50">
                    <label for="exampleFormControlInput1" class="form-label">Gender:</label><br>
                </div>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
            </div>
            <div>
                <div class="bg-info w-50">
                    <label for="stream"> Stream :</label><br>
                </div>
                <input type="checkbox" id="stream" name="stream" value="Science">
                <label for="stream"> Science</label>
                <input type="checkbox" id="stream1" name="stream" value="Arts">
                <label for="stream"> Arts</label>
                <input type="checkbox" id="stream2" name="stream" value="Commerce">
                <label for="stream"> Commerce</label>

            </div>

            <div class="bg-info w-50">
                <label for="exampleFormControlTextarea1" class="form-label">Remark</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="remark" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <div class="bg-info w-50">
                    <label for="state">State: </label>
                </div>
                <select name="state">

                    <option value="select">Select</option>
                    <option value="Andhra Pradesh" name="state">Andhra Pradesh</option>
                    <option value="Bihar" name="state">Bihar</option>
                    <option value="Odisha" name="state">Odisha</option>
                </select>
            </div>
            <input type="submit" text-align:center>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
    </form>
</body>

</html>