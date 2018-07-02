<?php 	

require_once 'core.php';

$productId = $_GET['i'];

$sql = "SELECT user_image FROM user WHERE user_id = {$userId}";
$data = $connect->query($sql);
$result = $data->fetch_row();

$connect->close();

echo "stock/" . $result[0];
