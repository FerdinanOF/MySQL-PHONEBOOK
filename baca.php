<!doctype>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <style>
        container{
        position: fixed;
        top: 25%;
        left: 30%;
      }
        table {
        background-color: #C0C0C0;
        border-collapse: collapse;
        width: 100%;
    }
        th, td {
        text-align: left;
        padding: 15px;
     }
        tr:nth-child(even) {
        background-color: #f2f2f2;
        }
    }
        .tombol:hover {
        background-color: #ddd;
        color: black;  
        }
      </style>
</head>
<body background="file5.jpg" style="background-size:  1400px";>
    <div class="card-header text-center">
            <h2 style="color: dimgray;">Daftar Nama Buku Telepon</h2>
        </div>
    <div class="container">
        

    <?php
        include "connect.php";
        $sql = "SELECT id, nama, email, teL, kota ". "FROM bukutelpon";

        $res=mysqli_query($link, $sql);
    ?>
    
    <table>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Alamat</th>
        <th>Action</th>
        <th>Edit</th>
      </tr>
   <?php
    while ($baris = mysqli_fetch_array($res)) {
        $id = $baris['id'];
        echo "<tr>";
        echo "<td>" . $id. "</td>";
        echo "<td>" . $baris['nama']."</td>";
        echo "<td>" . $baris['email']."</td>";
        echo "<td>" . $baris['teL']."</td>";
        echo "<td>" . $baris['kota']."</td>";
        echo '<td><a href="delete.php?id='.$id.'">Delete</a></td>';
        echo '<td><a href="edit.php?id='.$id.'">Edit</a></td>';
        echo "</tr>";
    }

        mysqli_close($link);

    ?>
    </table>
    <?php 
    echo "<br><br><br>";
    ?>
    ?>
    <center>
            <a href="form.html" class="btn btn-secondary btn-lg"><b>BUAT KONTAK BARU</a>
    </center>
    
</div>
    
</body>
</html>

