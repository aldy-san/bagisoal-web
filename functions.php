<?php
$conn = mysqli_connect("localhost", "root", "", "dummy");

function showpertanyaan($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function showcatatan($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function addpertanyaan($data){
	global $conn;
	$judul_pertanyaan = htmlspecialchars($data["judul_pertanyaan"]);
	$isi_pertanyaan = htmlspecialchars($data["isi_pertanyaan"]);
	$tags_pertanyaan = htmlspecialchars($data["tags_pertanyaan"]);

	$query = "INSERT INTO pertanyaan VALUES
			('$judul_pertanyaan', '$isi_pertanyaan', '$tags_pertanyaan')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
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