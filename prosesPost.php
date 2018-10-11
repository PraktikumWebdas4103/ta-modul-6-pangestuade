<?php  
session_start();
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$judul 	= $_POST['judul'];
	$cerita = $_POST['cerita'];
	$foto 	= $_FILES['foto'];
	$photo_name = $foto['name'];

	$jumlah_kata = count(explode(" ", $cerita));
	if($jumlah_kata <= 30){
		echo "<script>alert(\"Kata dalam cerita harus lebih dari 30 kata\")</script>";
		header('location: posting.php');
	} else {
		$file_moved = move_uploaded_file($foto['tmp_name'], "unggah/".$foto['name']);

		$date_now = date("Y-m-d");

		if ($file_moved) {
			$query = 	"INSERT INTO `postingan`(
							`judul`, 
							`cerita`, 
							`id_user`, 
							`tanggal`, 
							`foto`
						) 
						VALUES (
							'$judul',
							'$cerita',
							'". $_SESSION['id'] ."',
							'$date_now',
							'$photo_name'
						)
					";
			$query_success = mysqli_query($koneksi,$query);
			if ($query_success) {
				header('location: posting.php');
			}else{
				echo "Gagal " . mysqli_error($koneksi);
			}
		}
	}
}
