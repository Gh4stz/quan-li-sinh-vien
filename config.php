<?php
const HOST = 'localhost';
const USER = 'root';
const PASS = '';
const DATABASE = 'php_basic';
//connnect to database
$connect = new mysqli(HOST, USER, PASS, DATABASE);
mysqli_set_charset($connect, 'utf8');
//check xem ket noi co thanh cong hay khong

if($connect->connect_error) {
    var_dump($connect->connect_error);
    die();
}