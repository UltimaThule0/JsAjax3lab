<?php
	require_once('connect.php');
	$id = $_POST['id'];

	$result = mysqli_query($conn, "SELECT * FROM `comment` WHERE `id_new` = '$id'");
	$comment = array();

	$i = 0;
	foreach ($result as $com) {
		$comment[$i] = $com;
		$i++;
 	}
	echo json_encode($comment);
?>