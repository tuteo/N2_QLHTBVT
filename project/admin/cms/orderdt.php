             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Đơn hàng chi tiết</h3>
                      </div>
                       
                       <?php
                            if(isset($_REQUEST['madh']))
                            {
                                $madh=$_REQUEST['madh'];
                                $query = "select dhchitiet.masp, tensp, hinhanh, dhchitiet.dongia, dhchitiet.soluong"
                                        . " from dhchitiet join sanpham on dhchitiet.masp = sanpham.masp"
                                        . " where madh=$madh";
                                $rows=$db->query($query);
                                
                                echo "<table class='table'>";
                                echo "<tr>"
                                        . "<th>Tên sách</th>"
                                        . "<th>Đơn giá</th>"
                                        . "<th>Số lượng</th>"
                                        . "<th>Hình ảnh</th>"
                                     . "</tr>";
                                $tong=0;
                                    foreach($rows as $r) 
                                    {   
                                        $tong+=$r[3]*$r[4];
                                        echo "<tr>"
                                                . "<td>$r[1]</td>"
                                                 . "<td>".number_format($r[3])."&nbsp; vnđ</td>"
                                                  . "<td>$r[4]</td>"
                                                . "<td>"
                                                ."<img style='width: 30px' src='../hinhanhsp/".$r[2]."'>"
                                                . "</td>"
                                             . "</tr>";

                                    }
                                  
                                    echo "</table>";
                            }
                            ?>
                       <div style="font-size: 16px; color: black; margin-left: 50px; margin-bottom: 50px">
                           <?php
                                if(isset($_REQUEST['makh']))
                                {
                                    $makh=$_REQUEST['makh'];
                                    
                                $show="select hoten, diachi, sdt, ghichu from khachhang join donhang on khachhang.makh"
                                        . "=donhang.makh where khachhang.makh=".$makh;
                                $sh=$db->query($show);
                                $s=$sh->fetch();
                              
                           ?>
                           <h3>Thông tin chi tiết khách hàng</h3>
                           <table class="sida">
                               <tr>
                                   <td>Họ tên:  </td>
                                   <td><?php echo $s[0]?></td>
                               </tr>
                               <tr>
                                   <td>Địa chỉ:  </td>
                                   <td><?php echo $s[1]?></td>
                               </tr>
                               <tr>
                                   <td>Số điện thoại:</td>
                                   <td> <?php echo $s[2]?></td>
                               </tr>
                               <tr>
                                   <td>Tổng tiền đơn hàng: </td>
                                   <td><?php echo number_format($tong) ?>&nbsp; vnđ</td>
                               </tr>
                               <tr>
                                   <td>Ghi chú thêm: </td>
                                   <td><?php echo $s[3]?></td>
                               </tr>
                        
                           </table>
                                <?php } ?>
                       </div>
                            

                                           </div> 
                                     </div>
                                 </div>