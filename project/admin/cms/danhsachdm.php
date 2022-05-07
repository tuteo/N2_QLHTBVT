
<script>
    function check(ma)
            {
                if(confirm("Bạn có muốn xóa danh mục này không ?")==true)
                {
                    //chuyen den trang xoa
                    window.location="index.php?page=xoadm&ma="+ma;
                }    
            }
    </script>
             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quảng lý danh mục sản phẩm</h3>
                      </div>
                       
                       <?php
                            $query = "select * from danhmuc order by madm desc";
                            $rows=$db->query($query);

                            echo "<table class='table'>";
                            echo "<tr>"
                                    . "<th>Danh mục</th>"
                                    . "<th>Công cụ</th>"
                                 . "</tr>";
                            foreach($rows as $r) 
                            {                
                                echo "<tr>"
                                        . "<td>$r[1]</td>"
                                        . "<td>"
                                        . "<a href='index.php?page=suadm&ma=$r[0]' title='Edit'><img src='../cssjsadmin/images/edit.png' width='18px'/></a> "
                                        
                                        ."<a onclick='check($r[0])' href='#' title='Delete'><img src='../cssjsadmin/images/delete.png'width='18px'/></a>"
                                        . "</td>"
                                     . "</tr>";

                            }
				echo "<tr>"
                                    . "<td><a href='index.php?page=themdm'><button type='submit' class='btn-inverse'>Thêm mới</button></a></td>"
                                     ."<td></td>"
                                        ."<td></td>"
                                 . "</tr>";
                            echo "</table>";

                            ?>


                                           </div> 
                                     </div>
                                 </div>


           
