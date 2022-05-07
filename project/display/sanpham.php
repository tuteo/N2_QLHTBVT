<div class="motopress-wrapper content-holder clearfix woocommerce">
   <div class="container">
        <div class="row">
            <div class="span12">
                <section class="title-section">
                <h1 class="title-header">
		  Sách
                </h1>
				<!-- BEGIN BREADCRUMBS-->
                    <ul class="breadcrumb breadcrumb__t">
                        <a class="home" href="index.php">Trang chủ</a> / <a href="index.php?page=sanpham">Sách</a>
                    </ul>			<!-- END BREADCRUMBS -->
            </section>
            </div>
	</div>
       <div class="row">
	<div class="span9 right" id="content">
            <h1 class="page-title"></h1>

            <div>
                <form method="post" style="float: left">
                        <select name="orderby" class="orderby">
                                <option value="1" >Xếp theo sản phẩm mới</option>
                                <option value="2" >Xếp theo tên:A->Z</option>
                                <option value="3" >Xếp theo tên:Z->A</option>
                                <option value="4" >Xếp theo giá: Cao đến thấp</option>
                                <option value="5" >Xếp theo giá: Thấp đến cao</option>
                                <option value="6" >Xếp theo mua nhiều nhất</option>
                        </select>
                    <input type="submit" value="Sắp xếp">
                </form>
                <form action="index.php" method="get" style="float: right">
                    <div >Tìm kiếm: 
                        <input type="hidden" name='page' value="sanpham"/>
                        <input type="text" placeholder="Nhập thông tin tìm kiếm" name="key">
                        <input type="submit" value="search">
                    </div>
                </form>
            </div>
	

	<ul class="products">
            <?php
                
                $query="select tensp, tentg, giaban, hinhanh, tendm, masp from sanpham join danhmuc on sanpham.madm=danhmuc.madm "
                        . " where 1=1 ";
                if(isset($_REQUEST['madm']))
                {
                    $query.=' and sanpham.madm='.$_REQUEST['madm'];
                }
                if(isset($_REQUEST['max']) && isset($_REQUEST['min']))
                {
                    $min=$_REQUEST['min'];
                    $max=$_REQUEST['max'];
                    $query.=' and '.$min.'<=giaban<='.$max;
                }
                if(isset($_REQUEST['key']) && $_REQUEST['key']!='')
                    {
                        $key=$_REQUEST['key'];
                        $query.= " and tensp like '%$key%'";
                    } 
                if($_SERVER["REQUEST_METHOD"]=="POST")
                {
                    if($_POST['orderby']==2)
                    {
                        $query.=" order by tensp asc";
                    }
                    else if($_POST['orderby']==3)
                    {
                        $query.=" order by tensp desc";
                    }
                    else if($_POST['orderby']==4)
                    {
                        $query.=" order by giaban desc";
                    }
                    else if($_POST['orderby']==5)
                    {
                        $query.=" order by giaban asc";
                    } 
                    else $query.=" order by masp desc";
                }
                $query.=" limit 9";
                //echo $query;
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
                    ?>
                 
  
                    <div style="clear: both"></div>       
<nav class="woocommerce-pagination">
	<ul class='page-numbers'>
	<?php
        $q = "select count(*) from sanpham";
             $rs = $db->query($q);
              $tong = $rs->fetch()[0];  
              $n=6;
              $sotrang = ceil($tong/$n);
              
               for($k=1;$k<=$sotrang;$k++)
               {
                   echo "<li><a class='page-numbers' href=''>$k</a></li>";
               }
        ?>
</ul>
</nav>
		
	</div>
  <?php
                    include 'display/right.php';
                        include 'display/loc.php';
  ?>
       </div>
	</div>
	</div>
	</div>
	
	
