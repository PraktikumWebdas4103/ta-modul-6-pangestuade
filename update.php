<?php  
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$query = "SELECT `password`, `foto` FROM `user` WHERE id='$id'";
	$result = mysqli_query($conn,$query);
	$data = mysqli_fetch_array($result);

	$nama 					= $_POST['nama'];
	$username 				= $_POST['username'];
	$password 				= empty($_POST['password']) ? $data['password'] : $_POST['password'];
	$konfirmasi_password 	= $_POST['konfirmasi_password'];
	$tanggal_lahir 			= $_POST['tanggal_lahir'];
	$jenis_kelamin 			= $_POST['jenis_kelamin'];
	$foto 					= $_FILES['foto'];
	if(isset($_FILES['foto'])){
		$file_name = $foto['name'];
		$file_moved = move_uploaded_file($foto['tmp_name'], "unggah/".$foto['name']);
	} else {
		$file_name = $data['foto'];
	}
	echo $data['foto'];


	// if ($file_moved) {
	// 	$query = "INSERT INTO `user`(
	// 						  `username`, 
	// 						  `password`, 
	// 						  `nama`,
	// 						  `jenis_kelamin`,
	// 				 		  `tanggal_lahir`,
	// 				  		  `foto`) 
	// 			  VALUES (
	// 			  			'$username',
	// 			  			'$password',
	// 			  			'$nama',
	// 			  			'$jenis_kelamin',
	// 			  			'$tanggal_lahir',
	// 			  			'$file_name')";
	// 	$query_success = mysqli_query($conn,$query);
	// 	if ($query_success) {
	// 		header('location: editprofile.php');
	// 	}else{
	// 		echo "Gagal Update";
	// 	}
	// }
}
?>