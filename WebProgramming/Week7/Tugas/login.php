<?php

session_start();
require('database.php');
if (isset($_SESSION['level'])) {
    header('location:index.php?msg=already logged in');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid pt-5">
        <h1 class="text-center">Login</h1>
        <div class="row  d-flex justify-content-center">
            <div class="col-6 align-items-center">

                <form action="validation.php" method="post">
                    <div class="form-group pb-2">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Enter username">
                    </div>
                    <div class="form-group pb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password here">
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>