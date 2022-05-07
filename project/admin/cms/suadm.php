
 <?php
        
            $ma=$_REQUEST['ma'];
           //3. Lấy dữ liệu cũ
            $q= "select * from danhmuc where MaDM=$ma";
            $rows = $db->query($q);
            $r=$rows->fetch();
            
        if($_SERVER["REQUEST_METHOD"]=='POST')
        {
            //Validate du lieu
            
            $error = array(); //Khoi tao mang loi rong
                            if(empty($_POST['TenDM']))
                            {
                                $error[]='tendm';
                            }
                            else
                            {
                                $tendm=$_POST['TenDM']; 
                            }
                            if (empty($error))
                            {
                                $query = "update danhmuc"
                                        . " set tendm='$tendm'"
                                        . " where madm=$ma";
                                $count=$db->exec($query);
                              if($count>0)
                              header("location:?page=dsdm");
                            }
        }
        ?>

             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Sửa danh mục sản phẩm</h3>
                      </div>
                    <form action="" method="post" class="form-horizontal row-fluid">
                        <div class="control-group">
                            <label class="control-label">Tên danh mục</label>
				<div class="controls">
                                    <input type="text" name="TenDM" class="span8" value="<?php if(isset($r)) echo $r[1]; ?>"/>
				</div>
			</div>     
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn-inverse" check>Cập nhật</button>
                            </div>
                        </div>
                     </form>
                 </div> 
                 </div>
             </div>
         