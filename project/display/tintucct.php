
<?php
        $matt=$_REQUEST['matt'];
    
    $query='select * from tintuc where matt='.$matt;
    $rows = $db->query($query);
            $r=$rows->fetch();
?>
<div class="motopress-wrapper content-holder clearfix">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="index.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header">
Tin tức </h1>
 
<ul class="breadcrumb breadcrumb__t"><li><a href="index.php">Trang chủ</a></li><li class="divider"></li><li class="active"><?php echo $r[1]?></li></ul>  
</section>  </div>
</div>
<div class="row">
<div class="span11 right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-blog.php">
    <h2><?php echo $r[1]?></h2>
    <?php echo $r[3]?>

     
  </div>
  </div>

</div>
</div>
</div>
</div>
</div>
<div class="fb-comments" data-href="http://mocmeo.com" data-colorscheme="light" data-numposts="5" data-width="1170" style="margin-top: 0px"></div>