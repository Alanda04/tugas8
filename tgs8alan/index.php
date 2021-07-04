<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas_Basis_Data</title>
</head>
<body>
   <div class="container">
      <center><h1>Steam Mobil</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM pelanggan';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>Tabel pelanggan</h3>
         <table>
          <tr>
            <th>id.pelanggan</th>
            <th>nama pelanggan</th>
            <th>jenis mobil</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pelanggan'];?></td>
               <td><?= $row['nama_pelanggan'];?></td>
               <td><?= $row['jenis_mobil'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="5">Belum ada data</td>
            </tr>
            <?php endif; ?>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM petugas';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>Tabel Petugas</h3>
         <table>
          <tr>
            <th>id.petugas</th>
            <th>nama petugas</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_petugas'];?></td>
               <td><?= $row['nama_petugas'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM jasa';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel Jasa</h3>
         <table>
          <tr>
            <th>id.pelanggan</th>
            <th>id.petugas</th>
            <th>rincian</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pelanggan'];?></td>
               <td><?= $row['id_petugas'];?></td>
               <td><?= $row['rincian'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql4 = 'SELECT * FROM nota';
         $result = mysqli_query($conn, $sql4);
         ?>
         <h3>Tabel Nota</h3>
         <table>
          <tr>
            <th>id.pelanggan</th>
            <th>jenis mobil</th>
            <th>total harga</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pelanggan'];?></td>
               <td><?= $row['jenis_mobil'];?></td>
               <td><?= $row['total_harga'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
      </div>
   </div>
</body>
</html>