<?php
session_start();

$courses = $_SESSION['courses'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Course</title>
</head>
<body>
<h2>Course List</h2>

<p id="msg">
<?php
echo isset($_SESSION['msg']) ? $_SESSION['msg'] : "";
?>
</p>

<p id="error">
<?php
echo isset($_SESSION['error']) ? $_SESSION['error'] : "";
?>
</p>

<a href="../../controllers/CourseCreateController.php">
    <button>Create New Course</button>
</a>

<button onclick="loadCourses()">Refresh</button>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    </thead>

    <tbody id="courseTable">
    <?php foreach ($courses as $course) { ?>
        <tr>
            <td><?php echo $course['id']; ?></td>
            <td><?php echo $course['name']; ?></td>
            <td><?php echo $course['price']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script src="../js/course.js"></script>
</body>
</html>