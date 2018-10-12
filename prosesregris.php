<?php
	$koneksi = new mysqli("localhost", "root", "", "mahasiswa");

  			if (isset($_POST['submit'])) {
				$koneksi = new mysqli("localhost", "root", "", "mahasiswa");

				if ($koneksi) {
					$nim = $_POST['nim'];
					$nama = $_POST['nama'];
					$kelas = $_POST['kelas'];
					$gender =$_POST['gender'];
					$hobi =$_POST['hobi'];
					$fakultas=$_POST['fakultas'];
					$alamat=$_POST['alamat'];
					$password=$_POST['password'];
					
					if (!empty($nim) and !empty($nama) and !empty($kelas) and !empty($gender) and !empty($hobi) and !empty($fakultas) and !empty($alamat) and !empty($password)) {
						if (strlen($nim)==10 && is_numeric($nim)==TRUE) {
							if (strlen($nama)<=35 && is_string($nama)==TRUE) {
										$sql = $koneksi->query("
										INSERT INTO `datamahasiswa` (`nim`,`nama`,`kelas`,`gender`,`hobi`,`fakultas`,`alamat`,`password`)
										VALUES ('$nim', '$nama', '$kelas', '$gender', '$hobi', '$fakultas', '$alamat', '$password')
											   ");
										echo "REGISTRASI BERHASIL<br>";
							}else{
								echo "Nama tidak boleh melebihi 35 karakter dan tidak boleh bertipe angka!";
							}
						}else{
							echo "NIM harus 10 karakter dan bertipe angka!";

						}
					}else{
						echo "Form Tidak Boleh Kosong. Semua Inputan Harus Diisi!";
					}
					
				}else{
					echo "REGISTRASI GAGAL";
				}

  			}
?>