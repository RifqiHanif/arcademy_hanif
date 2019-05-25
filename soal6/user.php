<?php

include("koneksi.php");

if (isset($_POST['user'])) {
	$user = $_POST['user'];
	$sqlselectid = "SELECT id FROM tabel_users ORDER BY id DESC LIMIT 1";
	$result = $conn->query($sqlselectid);
	$lastID = $result->fetch_assoc();
	$lastID = $lastID['id'];
	$id = $lastID + 1;

	$sqlinsert = "INSERT INTO tabel_users(id,name) VALUES($id, '$user')";
	if ($conn->query($sqlinsert)) {
		header("Location: index.php");
	}
}