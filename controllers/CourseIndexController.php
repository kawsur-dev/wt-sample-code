<?php

require_once '../models/Connect.php';
require_once '../models/CourseModel.php';
require_once '../models/Close.php';

session_start();

$conn = Connect();
$courses = getAllCourses($conn);
close($conn);

$_SESSION['courses'] = $courses;
header('Location: ../views/course/index.php');


