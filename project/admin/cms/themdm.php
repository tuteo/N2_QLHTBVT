
<?php
                        if($_SERVER["REQUEST_METHOD"]=='POST')
                        {
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
                                $query= "insert into danhmuc(tendm)"
                                        ."values('$tendm')";
                                $dem=$db->exec($query);
                                
                             
                            }
                            
                        }
                    ?>
 
             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Thêm mới danh mục</h3>
                      </div>
                    <form action="" method="post" class="form-horizontal row-fluid">
                        <div class="control-group">
                            <label class="control-label">Tên danh mục</label>
				<div class="controls">
                                    <input type="text" name="TenDM" class="span8" id="tendm">
                                        <span class="errors">
                                        <?php
                                            if(!empty($error) && in_array('tendm', $error))
                                            {
                                                echo "Mời nhập tên danh mục !";
                                            }
                                        ?>
                                         </span>
				</div>
			</div>   
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn-inverse" onclick='check()' >Thêm mới</button>      
                                <script type="text/javascript">
                                       function check()
					{
                                            if(document.getElementById('tendm').value!="")
                                            {
                                                 alert("Thêm mới thành công");
                                            }
					}
                                 </script>
                            </div>
                        </div>
                     </form>
                 </div> 
                 </div>
             </div>

