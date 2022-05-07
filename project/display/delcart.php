<?php
if(isset($_REQUEST['masp']))
{
    $masp=$_REQUEST['masp'];
    if(isset($_SESSION['cart']))
    {
        unset($_SESSION['cart'][$masp]);
        header('location:?page=cart');
    }
}
 else {
    unset($_SESSION['cart']);
    header('location:?page=cart');
}
?>