
<?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $error = array(); //Khoi tao mang loi rong
                if($_POST['slDM']=='no')
                {
                    $error[]='dm';
                }
                else
                {
                    $madm=$_POST['slDM'];
                }
                if(empty($_POST['tensp']))
                {
                    $error[]='tensp';
                }
                else
                {
                    $tensp=$_POST['tensp']; 
                }
                if(empty($_POST['tentg']))
                {
                    $error[]='tentg';
                }
                else
                {
                    $tentg=$_POST['tentg']; 
                }
                if(empty($_POST['namxb']))
                {
                    $error[]='namxb';
                }
                else
                {
                    $namxb=$_POST['namxb']; 
                }
                 if(empty($_POST['giaban']))
                {
                    $error[]='giaban';
                }
                else
                {
                    $giaban=$_POST['giaban'];
                }
                if(empty($_POST['sl']))
                {
                    $error[]='sl';
                }
                else
                {
                    $sl=$_POST['sl']; 
                }
                 $km=$_POST['km'];
                 $ha=$_FILES['fImg']['name'];
                 $chitiet=$_POST['chitiet'];
   
                 
                if (empty($error))
                {                      
                    $query = "insert into sanpham(tensp, tentg, namxb ,madm , giaban, giakm, soluong, hinhanh, mota) values('$tensp', '$tentg', '$namxb', '$madm', $giaban, $km, '$sl', '$ha', '$chitiet')";
                    
                    $count=$db->exec($query);
                    if($count>0)
                    {
                        move_uploaded_file($_FILES['fImg']['tmp_name'], "../hinhanhsp/$ha");
                    }
                }
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Thêm mới sản phẩm</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label">Danh mục</label>
					<div class="controls">
                                            <select  class="span4" name="slDM">
                                                <option value="no">-- Chọn danh mục --</option>
						<?php
      
                                                    $query = "select madm, tendm from danhmuc order by tendm asc";
                                                    $rows=$db->query($query);
                                                     foreach ($rows as $r) 
                                                     {
                                                        echo "<option value='$r[0]'>$r[1]</option>";
                                                     }
                                                 ?>
                                            </select>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('dm', $error))
                                                    {
                                                        echo "Mời chọn danh mục !";
                                                    }
                                                ?>
                                             </span>
					</div>
				</div>
                               
                                <div class="control-group">
                                    <label class="control-label">Tên sản phẩm</label>
                                        <div class="controls">
                                            <input type="text" name="tensp" class="span7"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tensp', $error))
                                                    {
                                                        echo "Mời nhập tên sản phẩm !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                               <div class="control-group">
                                    <label class="control-label">Tác giả</label>
                                        <div class="controls">
                                            <input type="text" name="tentg" class="span6"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tentg', $error))
                                                    {
                                                        echo "Mời nhập tên tác giả !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <label class="control-label" for="basicinput">Năm xuất bản</label>
                                    <div class="controls">
                                       
                                            <input type="text" class="span2" name="namxb"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('namxb', $error))
                                                    {
                                                        echo "Mời nhập năm xuất bản!";
                                                    }
                                                ?>
                                             </span>
                                        
                                    </div>
				</div>
                               
                               
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Giá bán</label>
                                    <div class="controls">
                                       
                                            <input type="text" class="span3" name="giaban"/> VND
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('giaban', $error))
                                                    {
                                                        echo "Mời nhập giá bán!";
                                                    }
                                                ?>
                                             </span>
                                        
                                    </div>
				</div>
                               
                               <div class="control-group">
                                    <label class="control-label" for="basicinput">Khuyến mãi</label>
                                    <div class="controls">
                                       
                                            <input type="text" class="span3" value="0" name="km"> VNĐ
                                        
                                    </div>
				</div>
                               
                               <div class="control-group">
                                    <label class="control-label" for="basicinput">Số lượng</label>
                                    <div class="controls">
                                       
                                            <input type="text" class="span1" name="sl"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('sl', $error))
                                                    {
                                                        echo "Mời nhập số lượng!";
                                                    }
                                                ?>
                                             </span>
                                        
                                    </div>
				</div>
                               
                               <div class="control-group">
                                    <label class="control-label">Hình ảnh</label>
                                        <div class="controls">
                                            <input type="file" name="fImg"/>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <label class="control-label">Chi tiết</label>
                                        <div class="controls">
                                            <textarea name="chitiet" class="ckeditor"></textarea>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn-inverse">Thêm mới</button>      
                                    </div>
                                </div>
                           </form>
                        </div> 
                </div>
             </div>
