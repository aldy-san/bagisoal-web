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
	$tags = htmlspecialchars($data["tags"]);

	//upload gambar
	$gambar = upload();
	if(!$gambar){
		return false;
	}

  	$query = "INSERT INTO catatan VALUES
            ('$judul', '$deskripsi', '$gambar', '$tags')
            ";

  	mysqli_query($conn, $query);

  	return mysqli_affected_rows($conn);
}

function upload(){

	$namaFile = $_FILES["gambar"]["name"];
	$ukuranFile = $_FILES["gambar"]["size"];
	$error = $_FILES["gambar"]["error"];
	$tempName = $_FILES["gambar"]["tmp_name"];

	if($error == 4){
		echo "<script>
				alert('pilih gambar !')
			  </script>";
		return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
				alert('yang anda upload bukan gambar !')
			  </script>";
		return false;
	}
	//cek ukuran gambar
	if($ukuranFile > 3000000){
		echo "<script>
				alert('ukuran gambar terlalu besar !')
			  </script>";
		return false;
	}
	//gambar siap di upload, tapi file yang di upload nanti harus
	//satu folder dengan htdocs
	$namaFileBaru = uniqid(); // untuk handle nama file sama dari user yang berbeda
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	move_uploaded_file($tempName, 'lel/' . $namaFileBaru);

	return $namaFileBaru;
}	
?>