<?php

	require_once('connect.php');

	$kol = $_POST['kol'];
	$tek = $_POST['tek'];

	$result = mysqli_query($conn, "SELECT * FROM `news`");
	$result = mysqli_fetch_all($result);

	for($i = $tek; $i<($tek+$kol); $i++){
            $send[$i] = array(
            	'id' => $result[$i][0],
            	'link' => $result[$i][1], 
            	'url' => $result[$i][2], 
            	'category' => $result[$i][3], 
            	'title' => $result[$i][4],
            	'text' => $result[$i][5] , 
            	'date' => $result[$i][6]
            );
	}
 	
	echo json_encode($send);
?>