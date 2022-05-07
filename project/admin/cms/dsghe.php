             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quản lý Ghế</h3>
                      </div>
                       
                       <div class="module-body table">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table display"
                                width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                               Số Ghế
                                            </th>
                                            <th>
                                               Toa_id
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = "select * from ghe";
                  
                                        $rows=$db->query($query);
                                        foreach($rows as $r) 
                                        {                
                                            echo "<tr>"
                                                    . "<td>$r[0]</td>"
                                                    . "<td>$r[1]</td>"
                                                    . "<td>$r[2]</td>"
                                                 . "</tr>";

                                      }
                                      ?>
                                    </tbody> 
                                    <tfoot>
                                        <tr>
                                              <th>
                                                ID
                                            </th>
                                            <th>
                                               Số Ghế
                                            </th>
                                            <th>
                                               Toa_id
                                            </th>
                                           
                                        </tr>
                                    </tfoot>
                                    </table>
                                    <a href='index.php?page=themghe'><button type='submit' class='btn-inverse'>Thêm mới</button></a>
                 </div>

            </div> 
         </div>
     </div>

  