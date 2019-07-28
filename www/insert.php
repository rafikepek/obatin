<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama_obat=$_POST['nama_obat'];
 $harga=$_POST['harga'];
 $jumlah=$_POST['jumlah'];
 $q=mysqli_query($con,"INSERT INTO `produk` (`nama_obat`,`harga`,`jumlah`) VALUES ('$nama_obat','$harga','$jumlah')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
