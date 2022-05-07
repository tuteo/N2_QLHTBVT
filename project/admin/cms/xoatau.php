<?php
     include '../includes/connect.php';
     $id=$_REQUEST['id'];
     $q="delete from tau where id=$id";
     $d=$db->query($q);
     $r=$d->fetch(); 

     if($d>0)
         header("location:index.php?page=dstau");
?>

