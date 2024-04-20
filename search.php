<?php
include('dbconnect.php');

$customerName = $_GET['customer'];

$sql = "SELECT * FROM sales WHERE name LIKE '%$customerName%'";
$result = mysqli_query($conn, $sql);

$items = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $items[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($items);
?>
