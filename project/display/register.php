<div class="motopress-wrapper content-holder clearfix">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="page.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header">
Đăng ký thành viên </h1>
 
<?php
                      
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
               
                $error = array(); //Khoi tao mang loi rong
                if(empty($_POST['tendangnhap']))
                {
                    $error[]='tendn';
                }
                else
                {
                    $tendn=$_POST['tendangnhap'];
                     $kt="select * from khachhang where tendangnhap='$tendn'";
                     $kt1=$db->query($kt);
                     $kt2=$kt1->fetch();
                }
                if(isset($kt2) && $kt2>0)
                {
                    $error[]='trungten';
                }
                if(empty($_POST['matkhau']))
                {
                    $error[]='matkhau';
                }
                else
                {
                    $matkhau=$_POST['matkhau']; 
                }
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
                if (empty($error))
                {             
                    $query = "insert into khachhang(tendangnhap, matkhau, hoten ,diachi , email, sdt, ngaytao) values('$tendn', '$matkhau', '$hoten', '$diachi', '$email', '$sdt', now())";  
                    $count=$db->exec($query);
                    if($count>0)
                    {
                       // header("location:?page=login");
                       echo "<script>"
                        . "if(confirm('Đăng ký thành viên thành công')==true)"
                            . "{"
                               . "window.location='index.php?page=login'"
                               . "}</script>"     ;                      
                    }
                }
            }
        ?>
<ul class="breadcrumb breadcrumb__t"><li><a href="index.php">Trang chủ</a></li><li class="divider"></li><li class="active">Cart</li></ul>  
</section>  </div>
</div>
<div class="row">
<div class="span9 right right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
    <div style="margin-left: 100px;">
    <h3>Thông tin đăng ký</h3>
    <form action="" method="post">
                            <div class="control-group">
                                <label class="control-label tieude">Tên đăng nhập:</label>
                                        <div class="controls">
                                            <input type="text" name="tendangnhap" class="span3"/>
                                            <span style="color: red; padding-left: 15px">
                                                 <?php
                                                    if(!empty($error) && in_array('tendangnhap', $error))
                                                    {
                                                        echo "Mời nhập tên đăng nhập !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>  
                         <div class="control-group">
                                    <label class="control-label tieude">Mật khẩu:</label>
                                        <div class="controls">
                                            <input type="password" name="matkhau" class="span3"/>
                                            <span style="color: red; padding-left: 15px">
                                                 <?php
                                                    if(!empty($error) && in_array('matkhau', $error))
                                                    {
                                                        echo "Mời nhập mật khẩu !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
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
                                                    else 
                                                        if(!empty ($error) && in_array('trungten', $error))
                                                        {
                                                            echo "Tên đăng nhập đã tồn tại !";
                                                        }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                                <div class="control-group">
                                    <label class="control-label tieude">Địa chỉ:</label>
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
                                            <input type="email" name="email" class="span3"/>
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
                             <button type="submit" class="single_add_to_cart_button button alt">Đăng ký</button>
    </form>
    </div>
</div>
<?php 
    include 'display/right.php';
?>
</div>
</div>
</div>
</div>