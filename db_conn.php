<?php
header("Access-Control-Allow-Origin: *");
$link = mysqli_connect(
    "localhost",
    "s108021085",
    "eF3aik.i",
    "s108021085",
);

if(!$link){
    echo "Error: unable to connect to  MySQL." . PHP_EQL;
    echo "Debugging errno:" . mysqli_connect_errno() . PHP_EQL;
    echo "Debugging errno:" . mysqli_connect_error() . PHP_EQL;
    exit;
}

$link -> set_charset("utf8");