<?php
session_start();

include('dbconnect.php');

if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    echo "Session not set. Redirecting...";
    header("Location: loginindex.php");
    exit();
}

$userId = $_SESSION['id'];

if (isset($_POST['task_name']) && isset($_POST['task_date']) && !empty($_POST['task_name']) && !empty($_POST['task_date'])) {
    $taskName = mysqli_real_escape_string($conn, $_POST['task_name']);
    $taskDate = mysqli_real_escape_string($conn, $_POST['task_date']);

    $sql = "INSERT INTO tasks (task_name, task_date, user_id) VALUES ('$taskName', '$taskDate', '$userId')";
    if (mysqli_query($conn, $sql)) {
        echo "Task added successfully";
    } else {
        echo "Error adding task: " . mysqli_error($conn);
    }
} else {
    echo "Invalid data. Please provide a task name and date.";
}

mysqli_close($conn);
?>
