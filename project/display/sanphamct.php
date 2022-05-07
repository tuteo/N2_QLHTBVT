<div class="motopress-wrapper content-holder clearfix woocommerce">
<div class="container">
<div class="row">
<?php
    if(isset($_REQUEST['masp']))
    {
        $masp=$_REQUEST['masp'];
        $sanpham="select masp, tensp, tentg,hinhanh, namxb, giaban, mota, tendm, sanpham.madm, soluong "
                . "from sanpham join danhmuc on sanpham.madm=danhmuc.madm where masp=$masp";
         $sp1 = $db->query($sanpham);
         $sp=$sp1->fetch();
?>
    
<div class="span12" >
        <section class="title-section">
    <h1 class="title-header">
    <?php echo $sp[1]?> </h1>

    <ul class="breadcrumb breadcrumb__t">
        <a class="home" href="index.php">Trang chủ
        </a> / <a href="index.php?page=sanpham&madm=<?php echo $sp[8]?>"><?php echo $sp[7]?></a> / <?php echo $sp[1]?>
    </ul>  
        </section> 
    </div>
</div>
<div class="row">
<div class="span9">
    
    
    <div class="post-1954 product type-product status-publish hentry featured instock">
    <div class="images">
    <a href=""  class="woocommerce-main-image zoom" >
        <img style="width: 160px; height: 243px;" src="hinhanhsp/<?php echo $sp[3]?>" class="attachment-shop_single wp-post-image"/>
    </a>

    </div>
<div class="summary entry-summary">
    
    <p itemprop="price" class="price">
        <span class="amount"><?php echo number_format($sp[5])?> vnđ</span>
    </p>
   
    <div>
        <span style="font-size: 16px"> Tác giả: <?php echo $sp[2]?></span><br><br>
        <span style="font-size: 14px">Năm xuất bản: <?php echo $sp[4]?></span> <br><br>
        Thể loại: <a href="index.php?page=sanpham&madm=<?php echo $sp[8]?>" style="font-size: 18px"><?php echo $sp[7]?></a>
        <br><br>
    </div>
    <p class="stock "><?php
                            if($sp[9]>0) 
                                echo "còn $sp[9] quyển";
                            else 
                                echo "hết hàng";
                        ?>
    </p>
   
   
    <input type="number" value="1" class="input-text qty text" name="soluong" style="width: 40px; margin-right: 10px; margin-top: 10px"/>
            <a href="index.php?page=addcart&masp=<?php echo $sp[0] ?>" class="add_to_cart_button button product_type_simple">add to cart</a>
    <div class="product_meta">
    </div>

</div> 
<div class="woocommerce-tabs">
<ul class="tabs">
<li class="description_tab">
<a href="#">Thông tin chi tiết</a>
</li>
</ul>
<div class="panel entry-content" id="tab-description">

<p><?php echo $sp[6]?></p>
</div>
</div>
   
        
<div class="related products">
<h2>Sách liên quan</h2>
<ul class="products">
    <?php
 
        $query="select tensp, tentg, giaban, hinhanh, tendm, masp from sanpham"
                . " join danhmuc on sanpham.madm=danhmuc.madm where sanpham.madm=$sp[8] and masp!=".$sp['0']." limit 3";
        $rows=$db->query($query);
        $i=0;
        foreach ($rows as $r)
        {
            $i=$i+1;
            if($i%3==1)
            {
            ?>
        <li class="post-1958 product type-product status-publish hentry first featured instock">
        <a href="index.php?page=sanphamct&masp=<?php echo $r[5]?>">
            <img style="width: 135px; height: 200px" src="hinhanhsp/<?php echo $r[3]?>" class="attachment-shop_catalog wp-post-image" />
        <h3><?php echo $r[4]?></h3>
        </a>
        <div class='extra-wrap'> <div class="short_desc">
        <?php echo $r[0];?> </div>
            <span class="price"><span class="amount"><?php echo number_format($r[2]) ?> vnd</span></span>
        <a href='index.php?page=sanphamct&masp=<?php echo $r[5]?>' class='btn'>Chi tiết</a>
        <a href="index.php?page=addcart&masp=<?php echo $r[5] ?>" class="add_to_cart_button button product_type_simple">add to cart</a>
        </div>
        </li>
         <?php
        }
        else
        {
         ?>  
        <li class="post-1954 product type-product status-publish hentry featured instock">
        <a href="index.php?page=sanphamct&masp=<?php echo $r[5]?>">
            <img style="width: 135px; height: 200px" src="hinhanhsp/<?php echo $r[3]?> " class="attachment-shop_catalog wp-post-image" alt="0330523627"/>
        <h3><?php echo $r[4]?></h3>
        </a>
        <div class='extra-wrap'> <div class="short_desc">
        <?php echo $r[0];?></div>
        <span class="price"><span class="amount"><?php echo number_format($r[2]) ?> vnd</span></span>
        <a href='index.php?page=sanphamct&masp=<?php echo $r[5]?>' class='btn'>Chi tiết</a>
        <a href="index.php?page=addcart&masp=<?php echo $r[5] ?>" class="add_to_cart_button button product_type_simple">add to cart</a>
        </div>
        </li>
        <?php
        }
        }
    }
        ?>
</ul>
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
<div class="fb-comments" data-href="http://mocmeo.com" data-colorscheme="light" data-numposts="5" data-width="1170" style="margin-top: 0px"></div>