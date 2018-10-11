<?php 
session_start();
include_once 'koneksi.php';
?>
<body>
<center>
 <h2>Login</h2> 
 	<form action=" " method="POST">
		<table>		
			<tr><td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Send"></td>
			</tr>
		</table>
	</form>
</center>
</body>
<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$conn = mysqli_query($koneksi,"SELECT `nim`
		FROM `pengguna` 
		WHERE username = '$username' && password = '$password'");

	$x = mysqli_num_rows($conn);
	$data = mysqli_fetch_array($conn);
		if ($x > 0) {
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $data['nim'];
			header("location: editprofile.php");
		}
}
?>
