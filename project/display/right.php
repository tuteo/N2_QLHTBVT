<div class="sidebar span3" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">
        <div id="product_categories-3" class="visible-all-devices widget">
            <h3>Thể loại</h3>
            <ul class="product-categories">
                <?php
                    $dsdm='select * from danhmuc';
                    $dong=$db->query($dsdm);
                    foreach ($dong as $d)
                    {
                        echo "<li class='cat-item cat-item-21'><a href='index.php?page=sanpham&madm=".$d[0]."'>$d[1]</a></li>";
                    }
                ?>
                
            </ul> 
        </div>
        <div id="top-rated-products-3" class="widget">
            <h3>Sách bán chạy</h3>				
            <ul class="product_list_widget">
                <?php
                    $showtop='select masp, tensp, giaban, hinhanh, tendm from sanpham join danhmuc on sanpham.madm=danhmuc.madm limit 5';
                    $top=$db->query($showtop);
                    foreach ($top as $t)
                    {
  
                ?>
              <li>
                  <a href="index.php?page=sanphamct&masp=<?php echo $t[0]?>" title="<?php echo $t[1]?>">
                      <img style="width: 90px; height: 90px;" src="hinhanhsp/<?php echo $t[3]?>" class="attachment-shop_thumbnail wp-post-image" />
                  <?php echo $t[1]?>
                  </a> 
                  <span class="amount"><?php echo number_format($t[2])?> vnđ</span>  
              </li>
              <?php
                    }
              ?>
            </ul>
	</div>
                                    
