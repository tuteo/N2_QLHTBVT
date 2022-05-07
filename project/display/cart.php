<div class="motopress-wrapper content-holder clearfix">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="page.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header">
Danh sách sản phẩm trong giỏ hàng </h1>
 
<ul class="breadcrumb breadcrumb__t"><li><a href="index.php">Trang chủ</a></li><li class="divider"></li><li class="active">Cart</li></ul>  
</section>  </div>
</div>
<div class="row">
<div class="span9 right right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
<div id="post-1886" class="post-1886 page type-page status-publish hentry page instock">
<div class="woocommerce">
    <?php
if($_SERVER['REQUEST_METHOD']=='POST')
{

    /*$list=$_POST['txtSL'];
    foreach ($list as $k => $v) 
    {
        $_SESSION['cart'][$k]['sl']=$v;
    }*/
 foreach ($_SESSION['cart'] as $k => $v) 
 {
    if($_POST[$k]<=0)
         unset($_SESSION['cart'][$k]);
    else
     $_SESSION['cart'][$k]['sl']=$_POST[$k];   
 }
    
}

if(isset($_SESSION['cart']))
{
    if(count($_SESSION['cart'])>0)
    {
    echo "<form action='' method='post'>";
    echo "  <table class='shop_table cart' cellspacing='0'>"
        ."<thead>"
        ."<tr>"
        ."<th class='product-remove'></th>"
        ."<th class='product-thumbnail'>Ảnh</th>"
        ."<th class='product-name'>Tên sách</th>"
        ."<th class='product-price'>Đơn giá</th>"
        ."<th class='product-quantity'>Số lượng</th>"
        ."<th class='product-subtotal'>Tổng cộng</th>"
        ."</tr>"
        ."</thead>";
          $total=0;
        echo "<tbody>";
          foreach ($_SESSION['cart'] as $key => $value) 
            {
            $t1= $value['dg']*$value['sl'];
            $total+=$t1;
            echo "<tr class='cart_table_item'>"

                    ."<td class='product-remove'>"
                    ."<a href='index.php?page=delcart&masp=".$value['masp']."' class='remove' title='Xóa sách này'>&times;</a> </td>"

                    ."<td class='product-thumbnail'>"
                    ."<a href='index.php?page=sanphamct&masp=".$value['masp']."'>"
                       ."<img style='width: 90px; height: 70px' src='hinhanhsp/".$value['ha']."' class='attachment-shop_thumbnail wp-post-image' '/></a> </td>"

                    ."<td class='product-name'>"
                    ."<a href='index.php?page=sanphamct&masp=".$value['masp']."'>".$value['tensp']."</a> </td>"

                    ."<td class='product-price'>"
                    ."<span class='amount'>".number_format($value['dg']). " vnd</span> </td>"

                    ."<td class='product-quantity'>"
                    ."<div class='quantity'><input type='number' name='".$value['masp']."'  size='4' title='Số lượng' class='input-text qty text' value='".$value['sl']."'/></div> </td>"

                    ."<td class='product-subtotal'>"
                    ."<span class='amount'>".number_format($t1)." vnd </span> </td>"
                    ."</tr>"
                ."<tr>";
            }
            echo "<td colspan='6' class='actions'>";
            echo "<span style='padding-right: 40px; color:black; font-size: 16px'>Tổng tiền: ".number_format($total)." vnđ</span>";
           echo  "<input type='submit' class='button' value='Cập nhật'/> ";
           echo  " <a href='index.php?page=delcart' class='add_to_cart_button button product_type_simple'>xóa hết</a>";
            echo  " <a href='index.php?page=order' class='add_to_cart_button button product_type_simple'>thanh toán</a>";
            
            echo  "</td>"
        ."</tr>"
        ."</tbody>"
        ."</table>"
        ."</form>";
        
    }
 else {
      echo "<h3 style='color: red'>Bạn chưa có sản phẩm nào trong giỏ hàng</h3>" 
          ."Click <a href=''>đây</a> để mua hàng";
}}
    else{
      echo "<h3 style='color: red'>Bạn chưa có sản phẩm nào trong giỏ hàng</h3>" 
          ."<div style='font-size: 16px'>Click <a href='index.php?page=sanpham' style='font-size:18px; text-decoration: underline;'>đây</a> để mua hàng</div>";
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