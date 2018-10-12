<body bgcolor="#7FFFD4">
	<h1>LOGIN</h1><hr>
<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td><td></td>
			<td><input type="submit" name="submit" value="LOGIN">&nbsp;
				<button><a href="regristrasi.php">Regristrasi</a></button></td>
		</tr>
	</table>
</form>
<?php 
	if (isset($_POST['submit'])) {
		session_start();

		$koneksi = new mysqli("localhost", "root", "", "mahasiswa");

		$nim = $_POST['nim'];
		$password =$_POST['password'];

		$sql = "SELECT nim, password FROM datamahasiswa WHERE nim='$nim'";
		$qry = mysqli_query($koneksi,$sql);
		$row = mysqli_fetch_row($qry);

		if ($uname == $row[0]) {
			if ($pass == $row[1]) {
				$_SESSION["berhasil_login"]=1;
        		$_SESSION["nim"]=$row[0];
        		$_SESSION["password"]=$row[1];
        		header("location:user-home.php");
			}
			else{
				echo "PASSWORD SALAH";
			}
		}
		else{
			echo "NIM SALAH";
		}
	}
 ?>