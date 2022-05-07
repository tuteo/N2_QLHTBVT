<?php
     $ma=$_REQUEST['ma'];
     $query= "delete from danhmuc where madm=$ma";
     $count=$db->exec($query);
     if($count>0)
         header("location:?page=dsdm");
?>

