<?php
     include '../includes/connect.php';
     $masp=$_REQUEST['masp'];
     $q="select tensp, hinhanh from sanpham where masp=$masp";
     $d=$db->query($q);
     $r=$d->fetch();
     unlink($hinhanhsp/$r[1]);
     $query= "delete from sanpham where masp=$masp";
     
     $count=$db->exec($query);
     if($count>0)
         header("location:index.php?page=dssp");
?>

