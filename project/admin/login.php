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
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
        <?php
             session_start();
	     include "./includes/connect.php";
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
            if ($_SERVER["REQUEST_METHOD"]=='POST')
            {
		// lấy thông tin người dùng
		$username = $_POST["user"];
		$password = $_POST["pass"];
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
			$sql = "select * from admin where username ='$username' and password ='$password' ";
           
			$rows=$db->query($sql);
                        $rs = $rows->fetch();
			if (!empty($rs))
                            {
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                                $_SESSION['login_us']='ok';
				$_SESSION['username'] = $username;
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
       
        
        <div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="doan-vetau/index.html">
			  		Hệ thống quản trị Admin
			  	</a>

			
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
                                    <form class="form-vertical" method="post">
						<div class="module-head">
							<h3>Admin</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
                                                                    <input class="span12" type="text" id="inputEmail" placeholder="Username" name="user">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
                                                                    <input class="span12" type="password" id="inputPassword" placeholder="Password" name="pass">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Đăng nhập</button>
									<label class="checkbox">
                                                                            <input type="checkbox" name="cb" value="ok"> Nhớ mật khẩu
									</label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
        <div class="container">
            <b class="copyright">Quản Trị Đường Sắt Việt Nam </b>All rights reserved.
        </div>
    </div>
</body>
</html>