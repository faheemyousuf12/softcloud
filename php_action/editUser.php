<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {
	$userId = $_POST['userId'];
	$userName 		= $_POST['editUserName']; 
  $brandName 			= $_POST['editBrandName'];
  $categoryName 	= $_POST['editCategoryName'];
  $userStatus 	= $_POST['editUserStatus'];

				
	$sql = "UPDATE user SET user_name = '$userName', brand_id = '$brandName', categories_id = '$categoryName',  active = '$productStatus', status = 1 WHERE user_id = $userId ";

	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Update";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while updating user info";
	}

} // /$_POST
	 
$connect->close();

echo json_encode($valid);
 
