<?php
function getAllCourses($conn)
{
    $sql = "SELECT id, name, price FROM courses";
    $result = mysqli_query($conn, $sql);
    $courses = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $course = array("id" => $row['id'], "name" => $row['name'], "price" => $row['price']);
            array_push($courses, $course);
        }
    }
    return $courses;
}

function create($conn, $name, $price)
{
    $sql = "INSERT INTO courses (name, price) VALUES ('$name', '$price')";
    return mysqli_query($conn, $sql);
}