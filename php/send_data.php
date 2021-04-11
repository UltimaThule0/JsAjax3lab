<?php
	require_once('connect.php');

	$name = $_POST['name'];
	$id = $_POST['id'];
	$email = $_POST['email'];
	$text = $_POST['text'];

	$sql = "INSERT INTO comment (`name_comment`, `email_comment`, `text_comment`, `id_new`) VALUES ('$name', '$email', '$text', '$id')";
	mysqli_query($conn, $sql);
?>