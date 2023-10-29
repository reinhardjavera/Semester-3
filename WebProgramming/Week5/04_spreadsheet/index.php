<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World!');
$sheet->setCellValue('A2', 'Hello UMN');
$sheet->setCellValue('A3', 'Hello Indonesia');
$sheet->setCellValue('B1', 'John Thor');
$sheet->setCellValue('B2', 'John Wick');
$sheet->setCellValue('B3', 'John Doe');

$writer = new Xlsx($spreadsheet);
$writer->save('hello.xlsx');

$inputFileType = 'Xlsx';
$inputFileName = __DIR__ . '/hello.xlsx';
$reader = IOFactory::createReader($inputFileType);
$reader->setReadDataOnly(true);
$spreadsheet = $reader->load($inputFileName);
$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
echo "<pre>";
var_dump($sheetData);
