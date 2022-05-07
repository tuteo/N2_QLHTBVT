             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                          <h3>Danh sách đơn hàng chi tiết đã mua </h3>
                      </div>
                       
                       <?php
                       if(isset($_REQUEST['makh']))
                       {
                           $makh=$_REQUEST['makh'];
                            $query = "select hoten, donhang.ngaytao, dhchitiet.soluong,"
                                    . " dongia, tensp, sanpham.hinhanh, donhang.ngaytao from khachhang join donhang on"
                                    . " khachhang.makh=donhang.makh join dhchitiet on donhang.madh=dhchitiet.madh"
                                    . " JOIN sanpham on dhchitiet.masp=sanpham.masp where donhang.makh=$makh";
                            $rows=$db->query($query);
                            echo "<table class='table'>";
                                echo "<tr>"
                                        . "<th>Tên sách</th>"
                                        . "<th>Đơn giá</th>"
                                        . "<th>Số lượng</th>"
                                        . "<th>Hình ảnh</th>"
                                        . "<th>Ngày đặt</th>"
                                     . "</tr>";
                                $tong=0;
                                    foreach($rows as $r) 
                                    {   
                                        $tong+=$r[2]*$r[3];
                                        echo "<tr>"
                                                . "<td>$r[4]</td>"
                                                 . "<td>".number_format($r[3])."&nbsp; vnđ</td>"
                                                  . "<td>$r[2]</td>"
                                                . "<td>"
                                                ."<img style='width: 30px' src='../hinhanhsp/".$r[5]."'>"
                                                . "</td>"
                                                ."<td>$r[6]</td>"
                                             . "</tr>";

                                    }
                                  
                                    echo "</table>";
                                    
                        }
                        echo "<h3>Tổng tiền mà khách hàng đã mua: ".number_format($tong)." vnđ</h3>";
                            ?>


                                           </div> 
                                     </div>
                                 </div>

