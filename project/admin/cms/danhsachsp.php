
<script>
    function check(masp)
            {
                if(confirm("Bạn có muốn xóa sản phẩm này không ?")==true)
                {
                    //chuyen den trang xoa
                    window.location="index.php?page=xoasp&masp="+masp;
                }    
            }
    </script>
   
             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quản lý danh sách sản phẩm</h3>
                      </div>
                       
                       <div class="module-body table">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table display"
                                width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                Tên sách
                                            </th>
                                            <th>
                                               Thể loại
                                            </th>
                                             <th>
                                                Giá bán
                                            </th>
                                            <th>
                                                Ngày đăng
                                            </th>
                                            <th>
                                                 Hình ảnh
                                            </th>
                                            <th>
                                                Chi tiết sách
                                            </th>
                                            <th>
                                                Công cụ
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = "select * from sanpham join danhmuc on sanpham.madm=danhmuc.madm order by sanpham.madm desc";
                  
                                        $rows=$db->query($query);
                                        foreach($rows as $r) 
                                        {                
                                            echo "<tr>"
                                                    . "<td>$r[2]</td>"
                                                    . "<td>$r[11]</td>"
                                                    . "<td>".number_format($r[3])."</td>"
                                                    . "<td>".$r[10]."</td>"
                                                    . "<td><img src='../hinhanhsp/$r[5]' width='100px'/></td>"
                                                    . "<td>".substr($r[9], 0, 150 )."...</td>"
                
                                                    . "<td>"
                                                    . "<a href='index.php?page=suasp&masp=$r[0]' title='Edit'><img src='../cssjsadmin/images/edit.png' width='18px'/></a> "

                                                    ."<a onclick='check($r[0])' href='#' title='Delete'><img src='../cssjsadmin/images/delete.png'width='18px'/></a>"
                                                    . "</td>"
                                                 . "</tr>";

                                      }
                                      ?>
                                    </tbody> 
                                    <tfoot>
                                        <tr>
                                            <th>
                                                Tên sách
                                            </th>
                                            <th>
                                                Thể loại
                                            </th>
                                             <th>
                                                Giá bán
                                            </th>
                                            <th>
                                                Khuyến mãi
                                            </th>
                                            <th>
                                                 Hình ảnh
                                            </th>
                                            <th>
                                                Chi tiết
                                            </th>
                                            <th>
                                                Công cụ
                                            </th>
                                        </tr>
                                    </tfoot>
                                    </table>
                                    <a href='index.php?page=themsp'><button type='submit' class='btn-inverse'>Thêm mới</button></a>
                 </div>

            </div> 
         </div>
     </div>

  