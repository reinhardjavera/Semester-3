<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>

    <?php
    session_start();
    require('database.php');
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
            <h1 class="text-center">Register</h1>
            <div class="row  d-flex justify-content-center">
                <div class="col-6 align-items-center">
                    <form action="register_process.php" method="post" enctype="multipart/form-data">
                        <div class="pb-2">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Enter Username" required>
                        </div>
                        <div class="pb-2">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password Here" required>
                        </div>

                        <div class="row pb-1">
                            <div class="col-md-6">
                                <label for="inputEmail4">Student ID.</label>
                                <input type="text" class="form-control" name="card_no" placeholder="Enter 12-digit Student ID." maxlength="12" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4">Prodi</label>
                                <input type="text" class="form-control" name="user_prodi" placeholder="Enter Prodi" maxlength="20" required>
                            </div>
                        </div>
                        <div class="row pb-1">
                            <div class="col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" name="user_first_name" placeholder="Enter First Name">
                            </div>
                            <div class="col-md-6">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="user_last_name" placeholder="Enter Last Name">
                            </div>
                        </div>
                        <div class="row pb-1">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pb-1 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="level" id="level" value="student" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Student
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="level" id="level" value="admin">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Admin
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-5 pb-3">
                            <button type="submit" name="submit" class="btn btn-primary" value="register">Register</button>
                        </div>
                    </form>
                    <p>Already Have An Account? <a href="loginlol.php">Login</a></p>
                </div>
            </div>
        </div>
        <?php

        ?>

    </body>

    </html>