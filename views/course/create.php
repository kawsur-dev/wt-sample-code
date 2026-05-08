<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Create Course</title>
</head>
<body>

<h2>Create Course</h2>

<a href="../../controllers/CourseIndexController.php">See Courses</a>

<br><br>

<form action="../../controllers/CourseSaveController.php" method="post" onsubmit="return validate(this)" novalidate>

    <label for="name">Course Name:</label>
    <input type="text" name="name" id="name">
    <span id="nameErr"></span>
    <br><br>

    <label for="price">Price:</label>
    <input type="number" name="price" id="price">
    <span id="priceErr"></span>
    <br><br>

    <button type="submit">Create</button>

</form>

<p id="error">
    <?php
    echo isset($_SESSION['error']) ? $_SESSION['error'] : "";
    ?>
</p>

<script src="../js/course.js"></script>

</body>
</html>