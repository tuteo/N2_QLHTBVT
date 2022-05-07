             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Danh sách tin nhắn</h3>
                      </div>
                       
                       <?php
                            $query = "select * from phanhoi order by maph desc";
                            $rows=$db->query($query);

                            echo "<table class='table'>";
                            echo "<tr>"
                                    . "<th>Họ tên</th>"
                                    . "<th>Email</th>"
                                    . "<th>Ngày</th>"
                                    . "<th>Nội dung</th>"
                                 . "</tr>";
                            foreach($rows as $r) 
                            {                
                                echo "<tr>"
                                        . "<td>$r[1]</td>"
                                        . "<td>$r[2]</td>"
                                        . "<td>$r[3]</td>"
                                         . "<td>$r[4]</td>"
                                     . "</tr>";

                            }
				
                            echo "</table>";

                            ?>


                                           </div> 
                                     </div>
                                 </div>

