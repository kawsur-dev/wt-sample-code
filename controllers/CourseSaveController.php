<?php

require_once '../models/Connect.php';
require_once '../models/CourseModel.php';
require_once '../models/Close.php';

session_start();
$_SESSION['error'] = "";
$_SESSION['msg'] = "";

$name = htmlspecialchars($_POST['name']);
$price = htmlspecialchars($_POST['price']);

if ($name == "" || $price == "") {
    $_SESSION['error'] = "Please fill in all fields";
    header('Location: CourseCreateController.php');
    die();
}
$conn = Connect();
create($conn, $name, $price);
close($conn);

$_SESSION['msg'] = "Record created";
header('Location: CourseIndexController.php');


