<?php
$conn = mysqli_connect("localhost", "root", "", "dummy");

function query($query){
	global $conn;
	$result = mysqli_connect($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	$judul = htmlspecialchars($data["judul"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$gambar = htmlspecialchars($data["gambar"]);
	$tags = htmlspecialchars($data["tags"]);

  	$query = "INSERT INTO catatan VALUES
            ('$judul', '$deskripsi', '$gambar', '$tags')
            ";

  	mysqli_query($conn, $query);

  	return mysqli_affected_rows($conn);
}
?>