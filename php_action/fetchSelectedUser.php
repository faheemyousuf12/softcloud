<?php 	

require_once 'core.php';

$productId = $_POST['userId'];

$sql = "SELECT user_id, user_name, user_image, brand_id, categories_id, active, status FROM user WHERE user_id = $userId";
$result = $connect->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);