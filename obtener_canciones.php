<?php
header('Content-Type: application/json');
include('db.php');

$sql = "SELECT * FROM canciones ORDER BY fecha_agregado DESC";
$result = $conn->query($sql);

$canciones = [];

while ($row = $result->fetch_assoc()) {
    $canciones[] = $row;
}

echo json_encode($canciones);

$conn->close();
?>
