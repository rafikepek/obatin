<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_obat=$_POST['id_obat'];
 $nama_obat=$_POST['nama_obat'];
 $harga=$_POST['harga'];
 $jumlah=$_POST['jumlah'];
 $q=mysqli_query($con,"UPDATE `produk` SET `nama_obat`='$nama_obat',`harga`='$harga',`jumlah`='$jumlah' where `id_obat`='$id_obat'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
