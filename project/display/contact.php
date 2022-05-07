<div class="motopress-wrapper content-holder clearfix">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="page-fullwidth.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header">
Liên hệ </h1>
 
<ul class="breadcrumb breadcrumb__t"><li><a href="index.php">Home</a>
    </li><li class="divider"></li><li class="active">Liên hệ</li></ul>  
</section>  </div>
</div>
    
<div id="content" class="row">
<div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
<div id="post-14" class="post-14 page type-page status-publish hentry page instock">
<div class="row">
<div class="span12"><div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2056505766463!2d105.84103431432774!3d20.98439199466875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac4285b0dac7%3A0x51ff87f3608a72ff!2zNDMgS2ltIMSQ4buTbmcsIEdpw6FwIELDoXQsIEhvw6BuZyBNYWksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1446141004352" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>
<div class="span4"><h2>Thông tin liên hệ</h2>
<h5>Aprotrain-Aptech 43 Kim Đồng</h5>
<p>Các trung tâm đào tạo của APTECH đều tuân thủ thống nhất quy trình đào tạo được cấp chứng chỉ ISO 9001. Sinh viên của APTECH được công nhận rộng rãi, đặc biệt ở những nước có nền công nghệ tiên tiến. Năm 2008, APTECH được trao danh hiệu Đơn vị hàng đầu Thế giới.<br/>
<address>
<strong>Trung tâm<br/>
Aprotrain-Aptech<br/>
43 Kim Đồng , Giải Phóng</strong><br/>
Điện thoại: (04) 36 658 855<br/>
E-mail: <a href="#">
  </a>mrdino27@gmail.com<br/>
</address> </div>
<div class="span8"><h2>Thông tin</h2>
<div class="wpcf7" id="wpcf7-f208-p14-o1">
     <?php
        if ($_SERVER["REQUEST_METHOD"]=='POST')
        {
            $ten=$_POST['ten'];
            $email=$_POST['email'];
            $noidung=$_POST['noidung'];
            $query="insert into phanhoi(hoten, email, noidung, ngayph) values('$ten', '$email', '$noidung', now())";
            $rows=$db->exec($query);
            if($rows>0)
            {
                echo "<script>alert('Cảm ơn bạn đã phản hồi với chúng tôi, chúc bạn online vui vẻ')</script>";
            }
        }
        ?>
    
    <form action="" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="208"/>
<input type="hidden" name="_wpcf7_version" value="3.5.3"/>
<input type="hidden" name="_wpcf7_locale" value=""/>
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f208-p14-o1"/>
<input type="hidden" name="_wpnonce" value="c0021f0448"/>
</div>
       
<div class="row-fluid">
<p class="span4 field"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="ten" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" placeholder="Tên:"/></span> </p>
<p class="span4 field"><span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" placeholder="E-mail:"/></span> </p>
</div>
<p class="field"><span class="wpcf7-form-control-wrap your-message"><textarea name="noidung" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Nội dung:"></textarea></span> </p>
<p class="submit-wrap"><input type="reset" value="xóa" class="btn btn-primary"/><input type="submit" value="gửi" class="wpcf7-form-control wpcf7-submit btn btn-primary"/></p>
<div class="wpcf7-response-output wpcf7-display-none"></div>
    </form></div></div>
</div> 
<div class="clear"></div>
 
</div> 
</div>
</div>
</div>
</div>
</div>
</div>