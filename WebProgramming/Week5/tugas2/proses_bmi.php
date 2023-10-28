<?php
require_once __DIR__ . "/vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

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

        if (!file_exists('bmi_data.xlsx')) {
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', "No.");
            $sheet->setCellValue('B1', "Name");
            $sheet->setCellValue('C1', "Age");
            $sheet->setCellValue('D1', "Gender");
            $sheet->setCellValue('E1', "Height");
            $sheet->setCellValue('F1', "Weight");
            $sheet->setCellValue('G1', "BMI");
            $sheet->setCellValue('H1', "Category");
            $writer = new Xlsx($spreadsheet);
            $writer->save("bmi_data.xlsx");
        }

        if (!isset($_COOKIE['index_cookie'])) {
            setcookie('index_cookie', 1);
            $index = 2;
            $spreadsheet = IOFactory::load("bmi_data.xlsx");
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A' . $index, $index - 1);
            $sheet->setCellValue('B' . $index, $_POST['name']);
            $sheet->setCellValue('C' . $index, $_POST['age']);
            $sheet->setCellValue('D' . $index, $_POST['gender']);
            $sheet->setCellValue('E' . $index, $_POST['height']);
            $sheet->setCellValue('F' . $index, $_POST['weight']);
            $sheet->setCellValue('G' . $index, number_format($BMI, 2));
            $sheet->setCellValue('H' . $index, $category);
            $writer = new Xlsx($spreadsheet);
            $writer->save("bmi_data.xlsx");
        } else {
            setcookie('index_cookie', $_COOKIE['index_cookie'] + 1);
            $index = $_COOKIE['index_cookie'] + 2;
            $spreadsheet = IOFactory::load("bmi_data.xlsx");
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A' . $index, $index - 1);
            $sheet->setCellValue('B' . $index, $_POST['name']);
            $sheet->setCellValue('C' . $index, $_POST['age']);
            $sheet->setCellValue('D' . $index, $_POST['gender']);
            $sheet->setCellValue('E' . $index, $_POST['height']);
            $sheet->setCellValue('F' . $index, $_POST['weight']);
            $sheet->setCellValue('G' . $index, number_format($BMI, 2));
            $sheet->setCellValue('H' . $index, $category);
            $writer = new Xlsx($spreadsheet);
            $writer->save("bmi_data.xlsx");
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
                <a class="nav-link" href="./history.php">History</a>
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
                        <th scope="col">Weight status</th>
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