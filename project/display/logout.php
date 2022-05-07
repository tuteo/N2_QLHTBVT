<?php
   
    if(isset($_SESSION['login_member']))
    {
        unset($_SESSION['login_member']);
    }
    header("location:?page=login");
?>