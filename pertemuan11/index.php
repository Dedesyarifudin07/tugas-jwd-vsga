<?php
//impor ;ybrary ke spreadsheet
require 'vendor/autoload.php';

//menggunakan kelas

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//membuat objek baru dari kelas spreadsheet
$spreadsheet = new Spreadsheet();


//mendapatkan sheet aktif
$sheet = $spreadsheet->getActiveSheet();

//memberikan nilai ke kolom a baris ke 1
$sheet->setCellValue('A1', "HELLO WORLD");

//menulis file spreadsheet
$writer = new Xlsx($spreadsheet);
$writer->save("bacot.xlsx");
