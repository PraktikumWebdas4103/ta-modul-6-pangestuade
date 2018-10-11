<?php
	session_start();
?>
<center>
<h2>Registrasi</h2>
<form action=" " method="POST">
	<table>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td><input type="text" name="nim" required></td>
					</tr>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" name="username" required></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td>:</td>
						<td><input type="password" name="password" required></td>
					</tr>
					<tr>
						<td>Re-password :</td>
						<td>:</td>
						<td><input type="password" name="repassword"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="submit"></td>
					</tr>
	</table>
</form>
</center>
<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
	$nim = $_POST['nim'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$conn = mysqli_query($koneksi,"INSERT INTO pengguna(nim, username, password) 
		VALUES ('$nim','$username','$password')");
	if ($conn) {
		$_SESSION['username'] = $username;
		header("location: login.php");
	}
}
?>

