<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand" href="#"><b>BMI Calculator</b></a>
    </nav>
    <div class="container" style="width:25%;">
        <div class="row mt-4">
            <div class="col text-center">
                <h3>BMI Calculator</h3>
            </div>
            <?php
            if (isset($_GET['error'])) {
            ?>
                <div class="alert alert-danger">
                    All fields are required. Please fill all the required fields and submit again.
                </div>
            <?php
            } elseif (isset($_GET['deleted'])) {
            ?>
                <div class="alert alert-success">
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