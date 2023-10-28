<?php
if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['height']) && isset($_POST['weight'])) {
    if ($_POST['name'] == null || $_POST['age'] == null || $_POST['gender'] == null || $_POST['height'] == null || $_POST['weight'] == null) {
        header("location:./index.php?error");
    } else {
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $heightMeter = $height / 100;
        $BMI = $weight / ($heightMeter * $heightMeter);
        $category;
        if ($BMI < 18.5) {
            $category = "Underweight";
        } else if ($BMI >= 18.5 && $BMI < 25.0) {
            $category = "Normal";
        } else if ($BMI >= 25.0 && $BMI < 30.0) {
            $category = "Overweight";
        } else if ($BMI >= 30.0) {
            $category = "Obese";
        }
        if (!isset($_COOKIE['index_cookie'])) {
            setcookie('index_cookie', 0);
            $index = 0;
            $data = array(
                "name" => $_POST['name'],
                "age" => $_POST['age'],
                "gender" => $_POST['gender'],
                "height" => $_POST['height'],
                "weight" => $_POST['weight'],
            );
            setcookie("data[$index]", json_encode($data));
        } else {
            setcookie('index_cookie', $_COOKIE['index_cookie'] + 1);
            $index = $_COOKIE['index_cookie'] + 1;
            $data = array(
                "name" => $_POST['name'],
                "age" => $_POST['age'],
                "gender" => $_POST['gender'],
                "height" => $_POST['height'],
                "weight" => $_POST['weight'],
            );
            setcookie("data[$index]", json_encode($data));
        }
    }
} else {
    header("location:./index.php?error");
}
?>

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

        .BMI {
            padding: 0;
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
    <div class="container" style="width:25%">
        <div class="row pt-4">
            <div class="col text-center">
                <h3>BMI Result</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <b>For the information you entered: </b><br>
                Name : <?= $_POST['name'] ?><br>
                Age : <?= $_POST['age'] ?><br>
                Gender : <?= $_POST['gender'] ?><br>
                Height : <?= $_POST['height'] ?><br>
                Weight : <?= $_POST['weight'] ?><br>
            </div>
        </div>
        <div class="row pt-3 pb-3">
            <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                Your BMI is <b><?= number_format($BMI, 2); ?></b>, indicating your weight is in The <b><?= $category ?></b> category for adults of your height.
            </div>
        </div>
        <div class="row">
            <p class="BMI"><b>BMI Category</b></p>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">BMI</th>
                        <th scope="col">Weight tatus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Below 18.5</td>
                        <td>Underweight</td>
                    </tr>
                    <tr>
                        <td>18.5 - 24.9</td>
                        <td>Normal</td>
                    </tr>
                    <tr>
                        <td>25.0 - 29.9</td>
                        <td>Overweight</td>
                    </tr>
                    <tr>
                        <td>30.0 and above</td>
                        <td>Obese</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>