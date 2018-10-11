<?php 
include_once("koneksi.php");
session_start();
$id = $_SESSION['id'];
$username =$_SESSION['username'];
$query="SELECT
		    `nim`,
		    `username`,
		    `password`,
		    `nama`,
		    `kls`,
		    `jk`,
		    `fakultas`,
		    `hobi`,
		    `alamat`
		FROM
		    `pengguna`
		WHERE nim='$id'";
	$result=mysqli_query($koneksi,$query);
	$data=mysqli_fetch_array($result);
?>
<h2>Welcome <?php echo $username; ?> !</h2>
<table align="right">
	<tr>
		<td><a href="editprofile.php?id=<?php echo $id; ?>">Edit Profil |</a></td>
		<td align="center" colspan="2"><a href="posting.php">Posting |</a></td>
		<td><a href="logout.php">Logout</a></td>
	</tr>
</table>

<center>

<table>
	<center><h3>Data Pengguna</h3></center>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $data['nama']; ?></td>
		</tr>
		
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><?php echo $data['kls']; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $data['jk']; ?></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><?php echo $data['fakultas']; ?></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><?php echo $data['hobi']; ?></td>
		</tr>
		
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $data['alamat']; ?></td>
		</tr>
	</table>
</center>

