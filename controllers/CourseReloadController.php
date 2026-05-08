<?php

require_once '../models/Connect.php';
require_once '../models/CourseModel.php';
require_once '../models/Close.php';

$conn = Connect();
$courses = getAllCourses($conn);
close($conn);

echo json_encode($courses);


