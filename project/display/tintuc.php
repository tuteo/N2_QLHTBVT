

<div class="motopress-wrapper content-holder clearfix">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="index.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header">
Tin tức </h1>
 
<ul class="breadcrumb breadcrumb__t"><li><a href="index.php">Trang chủ</a></li><li class="divider"></li><li class="active">Tin tức</li></ul>  
</section>  </div>
</div>
<div class="row">
<div class="span11 right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-blog.php">
    
    
 <?php
  
            $q = "select count(*) from tintuc";
             $rs = $db->query($q);
              $tong = $rs->fetch()[0];  
              $n=3;
              $sotrang = ceil($tong/$n);
              
                if(isset($_REQUEST['p']))
                {
                    $p=$_REQUEST['p'];
                    $start=($p-1)*$n;
                }
                else
                {
                   $p=1;
                   $start=0;
                }
 
    $query="select * from tintuc order by matt desc limit $start,$n";
           // . " limit $start, $n";
    $rows=$db->query($query);
    foreach ($rows as $r)
    {
    
?>
<div class="post_wrapper"><article id="post-71" class="post-71 post type-post status-publish format-standard hentry category-adipisicing-elit post__holder cat-1-id instock">
<header class="post-header">
<h2 class="post-title">
    <a href="index.php?page=tintucct&matt=<?php echo $r[0]?>" title="<?php echo $r[1]?>"><?php echo $r[1]?></a></h2>
</header>
<figure class="featured-thumbnail thumbnail ">
    <a href="index.php?page=tintucct&matt=<?php echo $r[0]?>">
        <img style="width: 200px; height: 150px"src="hinhanhsp/<?php echo $r[2]?>">
    </a>
</figure>
 
<div class="post_content">
<div class="excerpt">
    <?php echo substr($r[3],0,500)?>...
 </div>
<a href="index.php?page=tintucct&matt=<?php echo $r[0]?>" class="btn btn-primary">đọc tiếp</a>
<div class="clear"></div>
</div>
 
<div class="post_meta meta_type_line"><div class="post_meta_unite clearfix"> <div class="post_date">
            <img src="hinhanhsp/calender.png" width="15px">
<time datetime="<?php echo $r[4]?>"><?php echo $r[4]?></time> </div>
</div></div> </article></div>
    <?php
    }
    ?>
    
  <div class="pagination pagination__posts">
      <ul>
                <?php
              for ($i=1;$i<=$sotrang;$i++)
              {
                 echo "<li class='active'>";
                 echo "<a href='index.php?page=tintuc&p=$i'>$i</a>";
                 echo   "</li>";
              }
             
           ?>
          
         
      </ul>
  </div>
  </div>

</div>
</div>
</div>
</div>
</div>