<div class="motopress-wrapper content-holder clearfix">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="page.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header">
Lịch sử các đơn hàng đã đặt </h1>
 
<ul class="breadcrumb breadcrumb__t"><li><a href="index.php">Trang chủ</a></li><li class="divider"></li><li class="active">Lịch sử</li></ul>  
</section>  </div>
</div>
<div class="row">
<div class="span9 right right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
<div id="post-1886" class="post-1886 page type-page status-publish hentry page instock">
<div class="woocommerce">
    <?php
    if(isset($_SESSION['tendangnhap']))
    {
        $tendangnhap=$_SESSION['tendangnhap'];
     $query = "select hoten, donhang.ngaytao, dhchitiet.soluong,"
                                    . " dongia, tensp, sanpham.hinhanh, donhang.ngaytao,dhchitiet.masp from khachhang join donhang on"
                                    . " khachhang.makh=donhang.makh join dhchitiet on donhang.madh=dhchitiet.madh"
                                    . " JOIN sanpham on dhchitiet.masp=sanpham.masp where khachhang.tendangnhap='$tendangnhap'";
                            $rows=$db->query($query);


                echo "  <table class='shop_table cart' cellspacing='0'>"
                    ."<thead>"
                    ."<tr>"
                    ."<th class='product-thumbnail'>Ảnh</th>"
                    ."<th class='product-name'>Tên sách</th>"
                    ."<th class='product-price'>Đơn giá</th>"
                    ."<th class='product-quantity'>Số lượng</th>"
                    ."<th class='product-subtotal'>Tổng cộng</th>"
                    ."</tr>"
                    ."</thead>";
                    $total=0;
                  echo "<tbody>";
            foreach ($rows as $r) 
                {
                $t1= $r[2]*$r[3];
                $total+=$t1;
                echo "<tr class='cart_table_item'>"
                    ."<td class='product-thumbnail'>"
                    ."<a href='index.php?page=sanphamct&masp=".$r[7]."'>"
                       ."<img style='width: 90px; height: 70px' src='hinhanhsp/".$r[5]."' class='attachment-shop_thumbnail wp-post-image' '/></a> </td>"

                    ."<td class='product-name'>"
                    ."<a href='index.php?page=sanphamct&masp=".$r[7]."'>".$r[4]."</a> </td>"

                    ."<td class='product-price'>"
                    ."<span class='amount'>".number_format($r[3]). " vnd</span> </td>"

                    ."<td class='product-quantity'>"
                    ."<div class='quantity'>$r[2]</div> </td>"

                    ."<td class='product-subtotal'>"
                    ."<span class='amount'>".number_format($t1)." vnd </span> </td>"
                    ."</tr>"
                ."<tr>";
               }
            echo "<td colspan='5' class='actions'>";
            echo "<span style='padding-right: 40px; color:black; font-size: 16px'>Tổng tiền đã mua: ".number_format($total)." vnđ</span>";
    
            echo  "</td>"
        ."</tr>"
        ."</tbody>"
        ."</table>"
        ."</form>";
        
    }

    ?>
 
</div>
<div class="clear"></div>
 
</div> 
</div>
<?php 
    include 'display/right.php';
?>
</div>
</div>
</div>
</div>