<?php
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        $sl=$_POST['sldh'];
        
    }
?>
<div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quảng lý đơn hàng</h3>
                      </div>
                       <div class="module-body table">
                           <form action="" method="post">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table 	display"
                                width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                Tên khách hàng
                                            </th>
                                            <th>
                                                 Ngày đặt hàng
                                            </th>
                                            <th>
                                                Thông tin
                                            </th>
                                            <th>
                                                Ghi chú
                                            </th>
                                            <th>
                                                Trạng thái
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = "select madh, hoten, donhang.ngaytao, ghichu, donhang.trangthai, donhang.makh from donhang join khachhang on "
                                                . "donhang.makh=khachhang.makh order by madh desc";
                       
                                        $rows=$db->query($query);
                                        foreach($rows as $r) 
                                        {       
                                            echo "<tr>"
                                                   
                                                    . "<td><a href='?page=orderkh&makh=".$r[5]."'>$r[1]</a></td>"
                                                    . "<td>$r[2]</td>"
                                                    . "<td><a href='?page=orderdt&madh=".$r[0]."&makh=".$r[5]."'>Xem chi tiết</a></td>"
                                                    . "<td>".substr($r[3],0,100)."...</td>"
                                                    
                                                    . "<td>";
                                       ?>    
                                    <select name="sldh">
                                                    <option <?php if($r[4]==0) echo "selected"?> value=0>Chưa giao hàng</option>
                                                    <option <?php if($r[4]==1) echo "selected"?> value=1>Đã giao hàng</option>
                                                    <option <?php if($r[4]==1) echo "selected"?> value=2>Hủy đơn hàng</option>
                                              </select>                                 
                                                    </td>
                                                 </tr>
                                        <?php
                                        }
                                     ?>
                                    </tbody> 
                                  
                                    </table>
                                    <button type='submit' class='btn-inverse'>Cập nhật</button>
                           </form>
                 </div>


                                           </div> 
                                     </div>
                                 </div>
