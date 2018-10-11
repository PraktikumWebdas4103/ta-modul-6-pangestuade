<?php 
session_start();
include_once 'koneksi.php';
$id = $_SESSION['id'];
$query = "SELECT `nim`, `username`, `password`, `nama`, `kls`, `jk`, `fakultas`, `hobi`, `alamat` FROM `pengguna` WHERE nim='$id'";
$result = mysqli_query($koneksi, $query);
$array = mysqli_fetch_array($result);
?>
<center><h2>Form Update</h2></center>
<form action=" " method="POST">
	<center>
					<table>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" name="nama" value="<?php echo $array['nama']; ?>"></td>
						</tr>
						<tr>
							<td>NIM</td>
							<td>:</td>
							<td><input type="text" name="nim" value="<?php echo $array['nim']; ?>"></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td>:</td>
							<td><input type="radio" name="kelas" value="D3MI-41-01" <?php echo $array['kls'] == "D3MI-41-01" ? "checked" : ""; ?>>D3MI-41-01
							<input type="radio" name="kelas" value="D3MI-41-02" <?php echo $array['kls'] == "D3MI-41-02" ? "checked" : ""; ?>>D3MI-41-02
							<input type="radio" name="kelas" value="D3MI-41-03" <?php echo $array['kls'] == "D3MI-41-03" ? "checked" : ""; ?>>D3MI-41-03
							<input type="radio" name="kelas" value="D3MI-41-04" <?php echo $array['kls'] == "D3MI-41-04" ? "checked" : ""; ?>>D3MI-41-04</td>
						</tr>
						<tr>
							<td>Jenis kelamin</td>
							<td>:</td>
							<td><input type="radio" name="jenis" value="Laki-laki" <?php echo $array['jk'] == "Laki-laki" ? "checked" : ""; ?>>Laki-laki
							<input type="radio" name="jenis" value="Perempuan" <?php echo $array['jk'] == "Perempuan" ? "checked" : ""; ?>>Perempuan</td>
						</tr>
						<tr>
							<td>Fakultas</td>
							<td>:</td>
							<td><select name="fakultas">
								<option value="FIT" <?php echo $array['fakultas'] == "FIT" ? "selected='selected'" : ""; ?>>Fakultas Ilmu Terapan</option>
								<option value="FTI" <?php echo $array['fakultas'] == "FTI" ? "selected='selected'" : ""; ?>>Fakultas Teknik Informatika</option>
								<option value="FIK" <?php echo $array['fakultas'] == "FIK" ? "selected='selected'" : ""; ?>>Fakultas Ildustri Kreatif</option>
								<option value="FKB" <?php echo $array['fakultas'] == "FKB" ? "selected='selected'" : ""; ?>>Fakultas Komunikasi dan Bisnis</option>
								<option value="FTE" <?php echo $array['fakultas'] == "FTE" ? "selected='selected'" : ""; ?>>Fakultas Teknik Elektro</option>
								<option value="FRI" <?php echo $array['fakultas'] == "FRI" ? "selected='selected'" : ""; ?>>Fakultas Rekayasa Industri</option>
							</select></td>
						</tr>
						<tr>
							<td>Hobi</td>
							<td>:</td>
							<?php 
							$hob = explode(", ", $array['hobi']);
							?>
							<td><input type="checkbox" name="hobi[]" value="Kayang" <?php echo in_array("Kayang", $hob) ? "checked" : ""; ?>>Kayang
							<input type="checkbox" name="hobi[]" value="Salto" <?php echo in_array("Salto", $hob) ? "checked" : ""; ?>>Salto
							<input type="checkbox" name="hobi[]" value="Belajar" <?php echo in_array("Belajar", $hob) ? "checked" : ""; ?>>Belajar
							<input type="checkbox" name="hobi[]" value="Koding" <?php echo in_array("Koding", $hob) ? "checked" : ""; ?>>Koding
							<input type="checkbox" name="hobi[]" value="Tidur" <?php echo in_array("Tidur", $hob) ? "checked" : ""; ?>>Tidur</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><input type="textarea" name="alamat" rows="20" cols="80"> <?php echo $array['alamat']; ?></td>
						</tr>
						
					</table>
					<br>
					<table>
						<tr>
							<td colspan="3"><input type="submit" name="submit" value="Update"></td>
						</tr>
					</table>
		
</form>

<?php 
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$jenis = $_POST['jenis'];
	$fakultas =$_POST['fakultas'];
	$hob = implode(", ",$_POST['hobi']);
	$alamat = $_POST['alamat'];


	$query="UPDATE
			    `pengguna`
			SET
			    `nama` = '$nama',
			    `kls` = '$kelas',
			    `jk` = '$jenis',
			    `fakultas` = '$fakultas',
			    `hobi` = '$hob',
			    `alamat` = '$alamat'
			WHERE
			    nim ='$id'
    ";
	$succes = mysqli_query($koneksi,$query);
	if ($succes) {
		header("location: halamanawal.php");
	} else {
		die(mysqli_error($koneksi));
	}
}
?>
