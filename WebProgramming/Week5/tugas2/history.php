<!doctype html>
<html lang="en">
<?php
require_once __DIR__ . "/vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
?>

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
    <div class="container" style="width:40%">
        <div class="row pt-4">
            <div class="col text-center">
                <h3>BMI History</h3>
            </div>
        </div>

        <div class="row">
            <?php
            if (!isset($_COOKIE['index_cookie']) || !file_exists("./bmi_data.xlsx")) {
            ?>
                <div class="p-3 mb-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
                    History is empty. Please go back to <a href="./index.php">calculator page</a> and fill a form.
                </div>
            <?php
            } else {
            ?>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
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
                        for ($i = 2; $i <= ($_COOKIE['index_cookie'] + 1); $i++) {
                            $inputFileType = "Xlsx";
                            $inputFileName = __DIR__ . "/bmi_data.xlsx";
                            $reader = IOFactory::createReader($inputFileType);
                            $reader->setReadDataOnly(true);
                            $spreadsheet = $reader->load($inputFileName);
                            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);


                            if ($sheetData[$i]["H"] == "Underweight") {
                                echo '<tr class="table-warning">';
                            } else if ($sheetData[$i]["H"] == "Normal") {
                                echo '<tr class="table-primary">';
                            } else if ($sheetData[$i]["H"] == "Overweight") {
                                echo '<tr class="table-warning">';
                            } else if ($sheetData[$i]["H"] == "Obese") {
                                echo '<tr class="table-danger">';
                            }

                        ?>
                            <td><?= $sheetData[$i]["A"]; ?></td>
                            <td><?= $sheetData[$i]["B"]; ?></td>
                            <td><?= $sheetData[$i]["C"]; ?></td>
                            <td><?= $sheetData[$i]["D"]; ?></td>
                            <td><?= $sheetData[$i]["E"]; ?></td>
                            <td><?= $sheetData[$i]["F"]; ?></td>
                            <td><?= $sheetData[$i]["G"]; ?></td>
                            <td><?= $sheetData[$i]["H"]; ?></td>
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