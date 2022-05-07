 
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $error = array(); //Khoi tao mang loi rong
                
                if(empty($_POST['tieude']))
                {
                    $error[]='tieude';
                }
                else
                {
                    $tieude=$_POST['tieude']; 
                }
                 $anhnen=$_FILES['fImg']['name'];
                 $noidung=$_POST['noidung'];
                
                if (empty($error))
                {                      
                    $query = "insert into tintuc(tieude,anhnen,noidung) values('$tieude', '$anhnen', '$noidung')";
                    $count=$db->exec($query);
                    if($count>0)
                    {
                        move_uploaded_file($_FILES['fImg']['tmp_name'], "../hinhanhsp/$anhnen");
                        echo"<b><i> THÊM MỚI THÀNH CÔNG </i></b>";
                     }
                        
                
                }
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Thêm tin tức</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                                
                               
                                <div class="control-group">
                                    <label class="control-label">Tiêu đề </label>
                                        <div class="controls">
                                            <input type="text" name="tieude" class="span7" value="<?php if(isset($tieude)) echo $tieude ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tieude', $error))
                                                    {
                                                        echo "Mời nhập tiêu đề !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                              
                               <div class="control-group">
                                    <label class="control-label"> Ảnh nền </label>
                                        <div class="controls">
                                            <input type="file" name="fImg"/>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <label class="control-label"> Nội dung</label>
                                        <div class="controls">
                                            <textarea name="noidung" class="ckeditor"></textarea>
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
