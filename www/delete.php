<?php
 include "db.php";
 if(isset($_GET['id_obat']))
 {
 $id_obat=$_GET['id_obat'];
 $q=mysqli_query($con,"delete from `produk` where `id_obat`='$id_obat'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
