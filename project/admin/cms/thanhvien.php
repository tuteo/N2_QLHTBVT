             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Danh sách thành viên</h3>
                      </div>
                       
                       <?php
                            $query = "select * from khachhang where trangthai=0 order by makh desc ";
                            $rows=$db->query($query);
                            echo "<table class='table'>";
                            echo "<tr>"
                                    . "<th>Họ tên</th>"
                                    . "<th>Email</th>"
                                    . "<th>Địa chỉ</th>"
                                    . "<th>Số điện thoại</th>"
                                    . "<th>Ngày tạo</th>"
                                 . "</tr>";
                            foreach($rows as $r) 
                            {                
                                echo "<tr>"
                                        . "<td><a href='?page=orderkh&makh=".$r[0]."'>$r[4]</a></td>"
                                        . "<td>$r[3]</td>"
                                        . "<td>$r[5]</td>"
                                         . "<td>$r[6]</td>"
                                            . "<td>$r[8]</td>"
                                     . "</tr>";

                            }
				
                            echo "</table>";

                            ?>


                                           </div> 
                                     </div>
                                 </div>

