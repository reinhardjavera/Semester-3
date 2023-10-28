<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .nav-link {
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body justify-content-center" data-bs-theme="dark">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link disabled" style="color: white;"><b>BMI Calculator</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Calculator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./history.php">History</a>
            </li>
        </ul>
    </nav>
    <div class="container" style="width:25%">
        <div class="row pt-4">
            <div class="col text-center">
                <h3>BMI Calculator</h3>
            </div>
            <?php
            if (isset($_GET['error'])) {
            ?>
                <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                    All fields are required. Please fill all the required fields and submit again.
                </div>
            <?php
            } elseif (isset($_GET['deleted'])) {
            ?>
                <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                    All data has been successfully deleted.
                </div>
            <?php
            }
            ?>
            <form action="./proses_bmi.php" method="post">
                <div class="col">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" name="age" class="form-control" min="1">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <div class="d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="Male">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check" style="margin-left: 5px;">
                                <input class="form-check-input" type="radio" name="gender" value="Female">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-1">
                        <label for="height" class="form-label">Height</label>
                        <input type="number" name="height" class="form-control" min="1">
                    </div>
                    <div class="form-group">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="number" name="weight" class="form-control" min="1">
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>