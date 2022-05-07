<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link type="text/css" href="../cssjsadmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../cssjsadmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="../cssjsadmin/css/theme.css" rel="stylesheet">
    <link type="text/css" href="../cssjsadmin/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>

</head>
<body>
<?php
        include __DIR__ .'/includes/header.php';
        
    ?>
<?php
        session_start();
        if(!isset($_SESSION['login_us']))
            header("location:login.php");
      ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <?php
                    include __DIR__ ."/includes/connect.php";
                    include __DIR__ .'/includes/sidebar.php';
                ?>
            </div>
                <?php
                if(isset($_REQUEST['page']))
                {
                   $page=$_REQUEST['page'];
                   switch ($page)
                    {
                        
                        case "dstau":
                            include "cms/danhsachtau.php";
                            break;
                        case "dstoa":
                            include "cms/danhsachtoa.php";
                            break;
                        case "dsghe":
                            include "cms/dsghe.php";
                            break;
                        case "dslt":
                            include "cms/danhsachlichtrinh.php";
                            break;
                        case "dskh":
                            include "cms/danhsachkhachhang.php";
                            break;
                        case "dsnv":
                            include "cms/danhsachnhanvien.php";
                            break;
                        case "dsdh":
                            break;
                        case "themdm":
                            include "cms/themdm.php";
                            break;
                        case "suadm":
                            include "cms/suadm.php";
                            break;
                        case "xoadm":
                            include "cms/xoadm.php";
                            break;
                        case "themtau":
                            include "cms/themtau.php";
                            break;
                        case "suatau":
                            include "cms/suatau.php";
                            break;
                        case "xoatau":
                            include "cms/xoatau.php";
                            break;
                        case "themtoa":
                            include "cms/themtoa.php";
                            break;
                        case "suatoa":
                            include "cms/suatoa.php";
                            break;
                        case "xoatoa":
                            include "cms/xoatoa.php";
                            break;
                        case "themghe":
                            include "cms/themghe.php";
                            break;
                        case "themlichtrinh":
                            include "cms/themlichtrinh.php";
                            break;
                        case "sualichtrinh":
                            include "cms/sualichtrinh.php";
                            break;
                        case "xoalichtrinh":
                            include "cms/xoalichtrinh.php";
                            break;
                        case "themkhachhang":
                            include "cms/themkhachhang.php";
                            break;
                        case "suakhachhang":
                            include "cms/suakhachhang.php";
                            break;
                        case "xoakhachhang":
                            include "cms/xoakhachhang.php";
                            break;
                        case "themnhanvien":
                            include "cms/themnhanvien.php";
                            break;
                        case "suanhanvien":
                            include "cms/suanhanvien.php";
                            break;
                        case "xoanhanvien":
                            include "cms/xoanhanvien.php";
                            break;
                        
                        case 'order':
                            include "cms/order.php";
                            break;
                        case 'order_dt':
                            include "cms/order_dt.php";
                            break;
                        
                        
                        case 'logout';
                            include "cms/logout.php";
                                break;
                        case 'order';
                            include "cms/order.php";
                            break;
                        case 'orderdt';
                            include "cms/orderdt.php";
                            break;
                        case 'orderkh';
                            include "cms/orderkh.php";
                            break;
                        case 'tinnhan';
                            include "cms/tinnhan.php";
                            break;
                        
                    }
                
                }
            
               ?>
           
            
        </div>
    </div>
                            <!--/.container-->
</div>
                        <!--/.wrapper-->

         <?php
            include __DIR__.'/includes/footer.php';
         ?>
   <script src="../cssjsadmin/ckeditor/ckeditor.js" type="text/javascript"></script>
	<script src="../cssjsadmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="../cssjsadmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/common.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
</body>
</html>