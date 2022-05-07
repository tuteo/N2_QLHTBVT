<script>
    function check(matt)
            {
                if(confirm("Bạn có muốn xóa tin tức này không ?")==true)
                {
                    //chuyen den trang xoa
                    window.location="index.php?page=xoatt&matt="+matt;
                }    
            }
    </script>
   
             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quản lý danh sách tin tức</h3>
                      </div>
                       <div class="module-body table">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered display"
                                width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                Tiêu đề
                                            </th>
                                            
                                            
                                            <th>
                                                 Ảnh nền 
                                            </th>
                                            <th>
                                                Nội dung
                                            </th>
                                            <th>
                                                Ngày tạo
                                            </th>
                                            <th>
                                                Công cụ
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = "select * from tintuc order by matt desc";
                  
                                        $rows=$db->query($query);
                                        foreach($rows as $r) 
                                        {                
                                            echo "<tr>"
                                                   
                                                    . "<td>$r[1]</td>"
                                                    . "<td><img src='../hinhanhsp/$r[2]' width='100px'/></td>"
                                                    . "<td>".substr($r[3], 0, 400 )."...</td>"
                                                    . "<td>$r[4]</td>"
                                                    
                                                    . "<td>"
                                                    . "<a href='index.php?page=suatintuc&matt=$r[0]' title='Edit'><img src='../cssjsadmin/images/edit.png' width='18px'/></a> "

                                                    ."<a onclick='check($r[0])' href='#' title='Delete'><img src='../cssjsadmin/images/delete.png'width='18px'/></a>"
                                                    . "</td>"
                                                 . "</tr>";

                                      }
                                      ?>
                                    </tbody> 
                                  
                                    </table>
                                    <a href='index.php?page=themtintuc'><button type='submit' class='btn-inverse'>Thêm mới</button></a>
                 </div>

            </div> 
         </div>
     </div>

  