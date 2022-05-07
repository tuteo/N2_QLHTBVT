<div class="motopress-wrapper content-holder clearfix">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="page.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header">
Xử lý đơn hàng </h1>
<ul class="breadcrumb breadcrumb__t"><li><a href="index.php">Trang chủ</a></li><li class="divider"></li><li class="active">Đơn hàng</li></ul>  
</section>  </div>
</div>
<div class="row">
<div class="span9 right right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
    <div class="woocommerce">
        <?php
            if(!isset($_SESSION['login_member']))
            {
                //Nếu là khách vãng lai thì in ra dòng này
        ?>
            <div class="canhbao">Bạn chưa là thành viên? <a href="?page=login" class="showlogin">&nbsp&nbspClick đây để đăng nhập </a> 
                <a href="?page=register" class="showlogin">&nbsp&nbsphoặc đây để đăng ký</a>
            </div>
        <?php } ?>
        <h3 id="order_review_heading">Hóa đơn của bạn</h3>
           <div id="order_review">
                <table class="shop_table">
                <thead>
                <tr>
                    <th class="product-name" style="background-color:#f5f5f5 ">Sản phẩm</th>
                <th class="product-total" style="background-color:#f5f5f5 ">Tổng cộng</th>
                </tr>
                </thead>
                <tfoot>        
                </tfoot>
                <tbody>
                    <?php
                    if(isset($_SESSION['cart']))
                    {
                        if(count($_SESSION['cart'])>0)
                        {
                            $total=0;
                            foreach ($_SESSION['cart'] as $key => $value) 
                            {
                            $t1= $value['dg']*$value['sl'];
                              $total+=$t1;          
                               echo  "<tr class='checkout_table_item'>";
                                echo "<td class='product-name' style='width: 500px'>".$value['tensp']." <strong class='product-quantity'>&times;". $value['sl']."</strong></td>";
                                echo "<td class='product-total'><span class='amount'>".number_format($t1) ."vnđ</span></td>";
                                echo " </tr>";
                            
                            }
                        }
                  ?>
                </tbody>
                </table>
               <span style="font-size: 23px; color: #fb5552">Tổng tiền đơn hàng: <?php echo number_format($total);?></span>
                    <?php  
                    }
                    ?>
              <?php
              if(!isset($_SESSION['login_member']))
              {
                if($_SERVER["REQUEST_METHOD"]=="POST")
                 {
               
                        $error = array(); //Khoi tao mang loi rong
                        if(empty($_POST['hoten']))
                        {
                            $error[]='hoten';
                        }
                        else
                        {
                            $hoten=$_POST['hoten']; 
                        }
                        if(empty($_POST['diachi']))
                        {
                            $error[]='diachi';
                        }
                        else
                        {
                            $diachi=$_POST['diachi']; 
                        }
                         if(empty($_POST['email']))
                        {
                            $error[]='email';
                        }
                        else
                        {
                            $email=$_POST['email'];
                        }
                        if(empty($_POST['sdt']))
                        {
                            $error[]='sdt';
                        }
                        else
                        {
                            $sdt=$_POST['sdt']; 
                        }
                        $ghichu=$_POST['ghichu'];
                        if (empty($error))
                        {             
                            $query = "insert into khachhang(hoten ,diachi , email, sdt, trangthai, ngaytao) values('$hoten', '$diachi', '$email', '$sdt',1,now())";  
                            $count=$db->exec($query);
                            if($count>0)
                            {
                                $makh=$db->lastInsertId();
                                $insert="insert into donhang(makh, ghichu , ngaytao) values('$makh', '$ghichu',now())";
                                $count=$db->exec($insert);
                                if($count>0)
                                {
                                    $madh = $db->lastInsertId();       
                                    $qct = "insert into dhchitiet(madh, masp, soluong, dongia) values";
                                    foreach ($_SESSION['cart'] as $value) 
                                    {
                                       
                                        $m = $value['masp'];
                                        $sl=$value['sl'];
                                        $dg=$value['dg'];
                                        $qct.= "($madh, $m,$sl,$dg),";
                                    }
                                    $qct = substr($qct, 0, strlen($qct)-1);
                                    $c=$db->exec($qct);
                                    if($c>0)
                                    {
                                        unset($_SESSION['cart']);
                                        echo "<script>"
                                             . "if(confirm('Đơn hàng của bạn đã đặt thành công, chúng tôi sẽ xử lý trong thời gian sớm nhất')==true)"
                                              . "{"
                                            . "window.location='index.php?page=cart'"
                                             . "}</script>"     ;      
                                    }
                                }
                              
                                           
                            }
                            
                        }
                     }
              }
              else
              {
                  if($_SERVER["REQUEST_METHOD"]=="POST")
                  {
                      $ghichu=$_POST['ghichu'];
                      $user=$_SESSION['tendangnhap'];
                      $trv="select makh from khachhang where tendangnhap='$user'";
                      $trv1=$db->query($trv);
                      $tr=$trv1->fetch();
                      $insert="insert into donhang(makh, ghichu , ngaytao) values('$tr[0]', '$ghichu',now())";
                      $count=$db->exec($insert);
                      if($count>0)
                                {
                                    $madh = $db->lastInsertId();       
                                    echo $madh;
                                    $qct = "insert into dhchitiet(madh, masp, soluong, dongia) values";
                                    foreach ($_SESSION['cart'] as $value) 
                                    {
                                       
                                        $m = $value['masp'];
                                        $sl=$value['sl'];
                                        $dg=$value['dg'];
                                        $qct.= "($madh, $m,$sl,$dg),";
                                    }
                                    $qct = substr($qct, 0, strlen($qct)-1);
                                    $c=$db->exec($qct);
                                    if($c>0)
                                    {
                                        unset($_SESSION['cart']);
                                        echo "<script>"
                                             . "if(confirm('Đơn hàng của bạn đã đặt thành công, chúng tôi sẽ xử lý trong thời gian sớm nhất')==true)"
                                              . "{"
                                            . "window.location='index.php?page=cart'"
                                             . "}</script>"     ;      
                                    }
                                 }
                    }
              }
        ?> 
               <?php
               if(!isset($_SESSION['login_member']))
               {
               ?>
               <div style="margin-left: 100px; margin-top: 50px">
                <h3>Thông tin khách nhận hàng</h3>
                <form action="" method="post"> 
                            <div class="control-group">
                                    <label class="control-label tieude">Họ và tên:</label>
                                        <div class="controls">
                                            <input type="text" name="hoten" class="span4"/>
                                            <span style="color: red; padding-left: 15px">
                                                 <?php
                                                    if(!empty($error) && in_array('hoten', $error))
                                                    {
                                                        echo "Mời nhập họ tên !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                                <div class="control-group">
                                    <label class="control-label tieude">Địa chỉ</label>
                                        <div class="controls">
                                            <input type="text" name="diachi" class="span5"/>
                                            <span style="color: red; padding-left: 15px">
                                                 <?php
                                                    if(!empty($error) && in_array('diachi', $error))
                                                    {
                                                        echo "Mời nhập địa chỉ !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                                <div class="control-group">
                                    <label class="control-label tieude">Email:</label>
                                        <div class="controls">
                                            <input type="email" name="email" class="span4"/>
                                            <span style="color: red; padding-left: 15px">
                                                 <?php
                                                    if(!empty($error) && in_array('email', $error))
                                                    {
                                                        echo "Mời nhập email !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                                   <div class="control-group">
                                    <label class="control-label tieude">Số điện thoại</label>
                                        <div class="controls">
                                            <input type="text" name="sdt" class="span2"/>
                                            <span style="color: red; padding-left: 15px">
                                                 <?php
                                                    if(!empty($error) && in_array('sdt', $error))
                                                    {
                                                        echo "Mời nhập số điện thoại !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                                 <div class="control-group">
                                    <label class="control-label tieude">Thông tin thêm</label>
					<div class="controls">
                                            <textarea class="span8" rows="7" cols="5" name="ghichu"></textarea>
                                        </div>
                             

                                    <button type="submit" class="single_add_to_cart_button button alt">
                                        <span style="font-size: 14px">Tiến hành đặt hàng</span></button>
                                     </form>
                                </div>
               </div>
               <?php
               }
               else
               {
               ?>
               <form action="" method="post">
                   <div class="control-group">
                                    <label class="control-label tieude">Thông tin thêm</label>
					<div class="controls">
                                            <textarea class="span8" rows="7" cols="5" name="ghichu"></textarea>
                                        </div>
                   </div>
               <button type="submit" class="single_add_to_cart_button button alt">
                                        <span style="font-size: 14px">Tiến hành đặt hàng</span></button>
               </form>
               <?php
               }
               ?>
         </div>
    </div>
</div>
<?php 
    include 'display/right.php';
?>
</div>
</div>
</div>
</div>