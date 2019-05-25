<?php

include("koneksi.php");

if (isset($_POST['skill']) && isset($_POST['user_id'])) {

	$skill = $_POST['skill'];
	$user_id = $_POST['user_id'];

	$sqlselectid = "SELECT id FROM tabel_skills ORDER BY id DESC LIMIT 1";
	$result = $conn->query($sqlselectid);
	$lastID = $result->fetch_assoc();
	$lastID = $lastID['id'];
	$id = $lastID + 1;

	$sqlinsert = "INSERT INTO tabel_skills(id,name,user_id) VALUES($id, '$skill', $user_id)";
	if ($conn->query($sqlinsert)) {
		header("Location: index.php");
	}
}