<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="file5.jpg" style="background-size:  1400px";>
	<?php	
		include "connect.php";

		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$tel = $_POST['phone'];
		$kota = $_POST['alamat'];

		$sql = "INSERT INTO bukutelpon (nama, email, teL, kota) "."VALUES ('$nama','$email','$tel', '$kota')";

		/*EKSEKUSI QUERY MYSQL*/
		$res = mysqli_query($link, $sql);
		echo "$tel";

		/* TUTUP KONEKSI MYSQL */
		mysqli_close($link);
	?>
	
	
	<h2>Lihat daftar buku telepon</h2>
	<a href="baca.php" ><b>==> Klik disini</a>
</body>
</html>
