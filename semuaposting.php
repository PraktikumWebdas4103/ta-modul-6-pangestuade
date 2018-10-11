<?php
include_once 'koneksi.php';
?>
	<center>SEMUA POSTINGAN
		<br>
		<br>
	<table border="1" align="center">
		<tr>
			<th width="100">Judul</th>
			<th width="500">Cerita</th>
			<th>ID User</th>
			<th>Tanggal</th>
			<th>Foto</th>
		</tr>
		<?php 
		$query = "
				SELECT
				    `postingan`.`id`,
				    `judul`,
				    `cerita`,
				    `pengguna`.`nama` AS 'nama',
				    `tanggal`,
				    `postingan`.`foto`
				FROM
				    `postingan`
				JOIN PENGGUNA ON `postingan`.`id_pengguna` = `pengguna`.`nim`
				";
		$result= mysqli_query($koneksi,$query);
		while($data=mysqli_fetch_array($result)){
		?>
		<tr>
			<td align="center">
				<?php
				echo $data['judul'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['cerita'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['nama'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['tanggal'];
				?>
			</td>
			<td align="center">
				<?php
				echo "<img src='unggah/".$data['foto']."' width='200'>";
				?>
			</td>
			
		</tr>
		<?php 
		}
		?>
	</table>
