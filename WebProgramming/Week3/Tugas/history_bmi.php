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
                <a class="nav-link" href="./history_bmi.php">History</a>
            </li>
        </ul>
    </nav>

    <div class="container" style="width:40%">
        <div class="row pt-4">
            <div class="col text-center">
                <h3>BMI History</h3>
            </div>
        </div>

        <div class="row">
            <?php
            if (!isset($_COOKIE['index_cookie']) || !isset($_COOKIE['data'])) {
            ?>
                <div class="p-3 mb-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                    History is empty. Please go back to <a href="./index.php">calculator page</a>.
                </div>
            <?php
            } else {
            ?>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Height</th>
                            <th scope="col">Weight</th>
                            <th scope="col">BMI</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $arr;
                        for ($i = 0; $i <= $_COOKIE['index_cookie']; $i++) {
                            $arr = json_decode($_COOKIE['data'][$i], true);
                            $heightMeter = $arr['height'] / 100;
                            $BMI = $arr['weight'] / ($heightMeter * $heightMeter);
                            if ($BMI < 18.5) {
                                $category = "Underweight";
                                echo '<tr class="table-warning">';
                            } else if ($BMI >= 18.5 && $BMI < 25.0) {
                                $category = "Normal";
                                echo '<tr class="table-primary">';
                            } else if ($BMI >= 25.0 && $BMI < 30.0) {
                                $category = "Overweight";
                                echo '<tr class="table-warning">';
                            } else if ($BMI >= 30.0) {
                                $category = "Obese";
                                echo '<tr class="table-danger">';
                            }
                        ?>
                            <td><?= $arr['name'] ?></td>
                            <td><?= $arr['age'] ?></td>
                            <td><?= $arr['gender'] ?></td>
                            <td><?= $arr['height'] ?></td>
                            <td><?= $arr['weight'] ?></td>
                            <td>
                                <?= number_format($BMI, 2) ?>
                            </td>
                            <td><?= $category ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-10 text-center">
                            <a class="btn btn-primary px-5" href="./cleardata.php" role="button">Clear Table History</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>