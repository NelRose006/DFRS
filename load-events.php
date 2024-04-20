<?php
session_start();

include('dbconnect.php');

if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
  http_response_code(401);
  exit("Unauthorized access");
}

$userId = $_SESSION['id'];
$sql = "SELECT * FROM tasks WHERE user_id = $userId";
$result = $conn->query($sql);

$events = array();

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $events[] = array(
      'title' => $row['task_name'],
      'start' => $row['task_date']
    );
  }
}

echo json_encode($events);
?>
