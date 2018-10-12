<body bgcolor="#7FFFD4">
<h1>PENDAFTARAN MAHASISWA BARU</h1><hr>
<form method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>KELAS</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="MI4101"> MI4101
  				<input type="radio" name="kelas" value="MI4102"> MI4102
  				<input type="radio" name="kelas" value="MI4103"> MI4103
  				<input type="radio" name="kelas" value="MI4104"> MI4104
  			</td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td>:</td>
			<td><input type="radio" name="gender" value="Perempuan"> Perempuan
  				<input type="radio" name="gender" value="Laki-laki"> Laki-laki
  			</td>
		</tr>
		<tr>
			<td>HOBI</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="Bersepeda">Bersepeda<br>
			 	<input type="checkbox" name="hobi" value="Olahraga">Olahraga<br>
			 	<input type="checkbox" name="hobi" value="Menggambar">Menggambar<br>
			 	<input type="checkbox" name="hobi" value="Menulis">Menulis<br>
			 	<input type="checkbox" name="hobi" value="Ngoding">Ngoding<br>
  			</td>
		</tr>
		<tr>
			<td>FAKULTAS</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Komunikasi dan Bisnis">Fakultas Komunikasi dan Bisnis</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
				<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
				<option value="Fakultas Informatika">Fakultas Informatika</option>
				</select> 
  			</td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td>:</td> 
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="DAFTAR"></td>
		</tr>
	</table>
</form>
</body>

<?php
	if (isset($_POST['submit'])) {
		include 'prosesregris.php';
	}

?>