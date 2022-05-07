<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTKH</title>
    <link type="text/css" href="./cssjsadmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="./cssjsadmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="./cssjsadmin/css/theme.css" rel="stylesheet">
    <link type="text/css" href="./cssjsadmin/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>

</head>
  <header>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="http://localhost/project/">Thông Tin Khách Hàng </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                     
                        
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
  </header>
<?php
        $db=new PDO("mysql:host=localhost;dbname=quanlyvetau",
                "root","");
        $db->exec("set names utf8");
?>



<?php
                        $matoa = $_GET['sotoa'];
                         $soghe =$_GET['soghe'];
                         $malichtrinh = $_GET['malichtrinh'];
    
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $error = array(); //Khoi tao mang loi rong
                
                if(empty($_POST['tenkh']))
                {
                    $error[]='tenkh';
                }
                else
                {
                    $tenkh=$_POST['tenkh']; 
                }
                if(empty($_POST['cmt']))
                {
                    $error[]='cmt';
                }
                else
                {
                    $cmt=$_POST['cmt']; 
                }
                if(empty($_POST['sdt']))
                {
                    $error[]='sdt';
                }
                else
                {
                    $sdt=$_POST['sdt'];
                }
                if(empty($_POST['email']))
                {
                    $error[]='email';
                }
                else
                {
                    $email=$_POST['email'];
                }
                
                
                 
                if (empty($error))
                {                      
                    $query = "insert into khachhang(tenkh, cmt ,sdt,email ) values('$tenkh', '$cmt', '$sdt', '$email')";
                    $count=$db->exec($query);
                    if($count){
                        $last_id = $db->lastInsertId();
                        $query2 = "insert into phieudatve(khachhang_id,tentoa_id,ghe_id,lichtrinh_id) VALUES ($last_id,$matoa,$soghe,$malichtrinh)"; 
                        $db->exec($query2);
                        $last_id2= $db->lastInsertId();
                        header("location:phieudatve.php?id=".$last_id2);
                    }
                }
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Thêm Thông Tin Khách Hàng</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                               <div class="control-group">
                                    <label class="control-label">Tên Khách Hàng</label>
                                        <div class="controls">
                                    <input type="text" name="tenkh" class="span6" />
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tenkh', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               <div class="control-group">
                                <label class="control-label">CMT</label>
                                  <div class="controls">
                                <input type="text" name="cmt" class="span6"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('cmt', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                                <div class="control-group">
                                   <label class="control-label">SĐT</label>
                                    <div class="controls">
                                        <input type="text" name="sdt" class="span6" />
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('sdt', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                               <div class="control-group">
                                    <label class="control-label">Email</label>
                                        <div class="controls">
                                            <input type="text" name="email" class="span6" />
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('email', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn-inverse">Đặt Vé</button>      
                                    </div>
                                </div>
                           </form>
                        </div> 
                </div>
                <div class="span6">
                  <table class="table  table-responsive">
                    <thead>
                        <tr class="text-white bg-light-green">
                            <th>Ga đi</th>
                            <th data-toggle="true">Ga đến</th>
                            <th>Tên tàu</th>
                            <th >giờ xuất phát</th>
                            <th >toa</th>
                            <th >ghế</th>
                            <th >giá vé</th>
                           
                        </tr>
                    </thead> 
                    <?php 
                    $sql2 = "select * from toa where id=$matoa";
                    $rows2 = $db->query($sql2)->fetch();
                    $sql = "Select tau.tentau,tengadi,gaden.tenga,khoihanh,lichtrinh.id from lichtrinh,tau,gaden,gadi where lichtrinh.gadi_id = gadi.id and lichtrinh.gaden_id = gaden.id and lichtrinh.matau = tau.id and lichtrinh.id=$malichtrinh ";
                       $rows=$db->query($sql);
                    foreach($rows as $r) 
                    {                

                    ?>
                    <tbody>
                         <tr class="route-row532">
                            <td><?php echo $r[1]; ?></td>
                            <td><?php echo $r[2]; ?></td>
                            <td><?php echo $r[0]; ?></td>
                            <td><?php echo $r[3]; ?></td>
                            <td><?php echo $rows2[1]; ?></td>
                            <td style="text-align: center;"><?php echo $soghe; ?></td>
                            <td style="text-align: center;">344 000 VND</td>
                        </tr>
                        </tbody> 
                </table>
                </div>
             </div>
 <?php }
 ?>

    