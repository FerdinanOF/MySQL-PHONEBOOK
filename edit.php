<!doctype>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <style type="text/css">
        .container{
        position: fixed;
        top: 25%;
        left: 30%;
      	}
        table {
        background-color: #C0C0C0;
        border-collapse: collapse;
        width: 40%;
   	 	}
        th, td {
        text-align: left;
        padding: 15px;
     	}
        tr:nth-child(even) {
        background-color: #f2f2f2;
        }
    </style>
</head>
<body background="file4.jpg" style="background-size:  1400px";>
	<div class="card-header text-center">
            <h2 style="color: dimgray;">Edit Kontak</h2>
    </div>
    <div class="container">
  
		
		<?php
			include "connect.php";
			$nomer = $_GET['id'];
			$sql = "SELECT * FROM bukutelpon WHERE id=$nomer";
			$res=mysqli_query($link, $sql);
			$baris = mysqli_fetch_assoc($res);
		?>
		<form action="edit2.php" method="GET">
			<table>
		<tr>
			<td>ID</td>
			<td><?php echo "<input type=text readonly=readonly name=id value=$baris[id]>";?>
			</td>
		</tr>

		<tr>
			<td>Nama</td>
			<td><?php echo "<input type=text name=nama value=$baris[nama]>";?>
			</td>
		</tr>

		<tr>
			<td>Email</td>
			<td><?php echo "<input type=text name=email value=$baris[email]>";?>
			</td>
		</tr>

		<tr>
			<td>Phonenumber</td>
			<td><?php echo "<input type=tel name=phone value=$baris[teL]>";?>
			</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td><?php echo "<input type=text name=kota value=$baris[kota]>"; ?>
			</td>
		</tr>

		<tr>
		<td></td>
		<td><input type=submit value=EDIT></td>
		</tr>

		</form>
			</table>
		<?php mysqli_close($link); ?>
</div>
</body>
</html>






