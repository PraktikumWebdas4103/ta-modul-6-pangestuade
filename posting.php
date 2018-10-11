<?php 
include_once("koneksi.php");
session_start();
$id = $_SESSION['id'];
$username =$_SESSION['username'];
?>

<center>
	<h2>Input Postingan</h2>
		<p align="right">
			<a href="semuaposting.php">Semua Postingan |</a>
		<a href="daftarposting.php">Postinganku</a>
		</p>
		
				<table>
					<form action="prosesPost.php" method="POST" enctype="multipart/form-data">
						<tr>
							<td>Judul</td>
							<td>:</td>
							<td>
								<input type="text" name="judul">
							</td>
						</tr>
						<tr>
							<td>Cerita</td>
							<td>:</td>
							<td>
								<textarea name="cerita" rows="10" cols="40"></textarea>
							</td>
						</tr>
						<tr>
							<td>Foto</td>
							<td>: </td>
							<td>
								<input type="file" name="foto">
							</td>
						</tr>
					</form>
				</table>
				<br>
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</table>
	