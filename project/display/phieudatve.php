
<body class="archive post-type-archive post-type-archive-route wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
<div id="tt-wide-layout" >
<div id="tt-header-wrap" >

    <aside class="top-aside clearfix">
        <div class="center-wrap">
            <div class="one_half">
                <div class="sidebar-widget widget_text">            <div class="textwidget"><ul class="list">
<li style="font-weight: 700;
    font-size: 16px;">Tổng đài vé Online:<a href="tel:19001730" style="font-weight: 700;
    font-size: 16px;"> 1900 6469</a></li>
</ul>
</div>
        </div>            </div><!-- end .top-toolbar-left -->

            <div class="one_half">
                <div class="sidebar-widget widget_text">            <div class="textwidget"><div class="social-top">
<ul>
<li>
            <a href="https://www.facebook.com/DailyvexeHaNoiVinh"><i class="fa fa-facebook"></i><br />
        </a>
        </li>
<li>
            <a href="https://twitter.com"><i class="fa fa-twitter"></i><br />
        </a>
        </li>
<li>
            <a href="https://www.google.com.vn/"><i class="fa fa-google-plus"></i><br />
        </a>
        </li>
<li>
            <a href="https://www.youtube.com/channel/UCVGN2liHOox8Ob8sbb88qhQ?view_as=subscriber"><i class="fa fa-youtube"></i><br />
        </a>
        </li>
</ul>
</div>
</div>
        </div>            </div><!-- end .top-toolbar-right -->
        </div><!-- end .center-wrap -->
        <div class="top-aside-shadow"></div>
    </aside>

    <header >
        <div class="center-wrap">
            <div class="companyIdentity">
                                                            <a href="http://localhost/project/"><img src="wp-content/uploads/2018/05/dsvn1.png" alt="Tàu Bông Sen Vàng" /></a>
                                                </div><!-- end .companyIdentity -->
            <nav>
                <ul id="menu-main-nav">
                 
<li id="menu-item-672" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-672"><a href="#">Lịch trình</a></li>


                </ul>
            </nav>
        </div><!-- end .center-wrap -->
    </header>
</div><!-- END #tt-header-wrap -->
    <section class="small_banner">
            <div class="center-wrap banner-no-crumbs">
                    <p class="page-banner-heading"></p>
        
                                        </div><!-- end .center-wrap -->
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="tt-overlay"></div>
    </section>

<section id="content-container" class="clearfix">
    <div class="center-wrap tt-relative clearfix">
                <div class="section-list" id="Star-ha-noi">
  
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr class="text-white bg-light-green">
                            <th>STT</th>
                            <th data-toggle="true">Tên Kh</th>
                            <th>SDT</th>
                            <th data-hide="phone">CMT</th>
                            <th data-hide="phone" style="text-align: center;">Email</th>
                            <th data-hide="phone" style="text-align: center;">Tên Tàu</th>
                            <th data-hide="phone" style="text-align: center;">Tên Toa</th>
                            <th data-hide="phone" style="text-align: center;">Số Ghế</th>
                            <th></th>
                        </tr>
                    </thead> 
                    <tbody>
                         <tr class="route-row532">
                            <td>1</td>
                            <td>Trần Trung Đức</td>
                            <td>0988994223</td>
                            <td>168601595</td>
                            <td style="text-align: center;">trantrungduc2508@gmail.com</td>
                            <td style="text-align: center;">Tàu 01</td>
                            <td style="text-align: center;">Toa A01</td>
                            <td style="text-align: center;">33</td>
                          
                        
                                        </tbody> 
                </table>    
            </div>      
        </div>
                
                </table>    
            </div>      
        </div>
            </div><!-- end #main-wrap -->

</section><!-- END content-container -->
<?php

    include './admin/includes/connect.php';

            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
              
                    $diemdi=$_POST['diemdi'];   
                    $diemden=$_POST['diemden']; 
                    $date1 = strtr($_POST['ngaydi'], '/', '-');;
                    $ngaydi = date("Y-m-d",strtotime($date1));
                
                  
                  

                    $loaive = $_POST['loaive'];
                    echo $_POST['ngayve'];
                  

                     $sql = "Select tau.tentau,tengadi,gaden.tenga,khoihanh from lichtrinh,tau,gaden,gadi where lichtrinh.gadi_id = gadi.id and lichtrinh.gaden_id = gaden.id and lichtrinh.matau = tau.id and gaden_id=$diemden and gadi_id=$diemdi and chieudi=$loaive and ngaydi='$ngaydi'";
                     
                    if(isset($_POST['ngayve']) && !empty($_POST['ngayve'])){

                         $date2 = strtr($_POST['ngayve'], '/', '-');;
                         $ngayve = date("Y-m-d",strtotime($date2));
                         $sql .="and ngayve='$ngayve'";
                    }   
                   $rows=$db->query($sql);
                    foreach($rows as $r) 
                    {                

?>
<?php 
            }
        }
        ?>