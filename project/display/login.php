<div class="motopress-wrapper content-holder clearfix">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="page.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header">
Đăng nhập </h1>
<ul class="breadcrumb breadcrumb__t"><li><a href="index.php">Trang chủ</a></li><li class="divider"></li><li class="active">Đăng nhập</li></ul>  
</section>  </div>
</div>
<div class="row">
<div class="span9 right right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
    <?php
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
            if ($_SERVER["REQUEST_METHOD"]=='POST')
            {
		// lấy thông tin người dùng
		$username = $_POST["tendangnhap"];
		$password = $_POST["matkhau"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") 
                    {
			echo "<script>alert('Tên đăng nhập hoặc mật khẩu bạn không được để trống!')</script>";
                    }
                else
                    {
			$sql = "select * from khachhang where tendangnhap ='$username' and matkhau ='$password' ";
           
			$rows=$db->query($sql);
                        $rs = $rows->fetch();
			if (!empty($rs))
                            {
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                                $_SESSION['login_member']='ok';
				$_SESSION['tendangnhap'] = $username;
                                // Thực thi hành động sau khi lưu thông tin vào session

                                header('Location: index.php');
                             }
                            else
                            {
                                echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng !')</script>";
                            }
                            
                    }
                    }
?>
    <div style="margin-left: 200px;">
    <h2>Thông tin đăng nhập</h2>
    <form action="" method="post">
                                <div class="control-group">
                                <label class="control-label tieude">Tên đăng nhập:</label>
                                        <div class="controls">
                                            <input type="text" name="tendangnhap" class="span4"/>
                                        
                                        </div>
                                </div>  
                                <div class="control-group">
                                    <label class="control-label tieude">Mật khẩu:</label>
                                        <div class="controls">
                                            <input type="password" name="matkhau" class="span4"/>
                                  
                                        </div>
                                </div>   
         <button type="submit" class="single_add_to_cart_button button alt">Đăng nhập</button>
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