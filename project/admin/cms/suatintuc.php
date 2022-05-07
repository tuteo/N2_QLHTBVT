<?php
            $matt=$_REQUEST['matt'];
           // Lấy dữ liệu cũ
            $q= "select * from tintuc where matt=$matt";
            $rows = $db->query($q);
            $r=$rows->fetch();



if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $error = array(); 
                
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
                    //Lay du lieu tu form
                    $query = "update tintuc"
                            . " set tieude='$tieude', anhnen='$anhnen', noidung='$noidung'"
                            . "where matt='$matt'";
 
                    //Thuc thi cau truy van
                    $count=$db->exec($query);

                    // Xu ly kq:
                    if($count>0)
                    {
                        move_uploaded_file($_FILES['fImg']['tmp_name'], "../hinhanhsp/$anhnen");
                        header("location:index.php?page=dstintuc");
                    }
                }
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Cập nhật tin tức</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                                
                               
                                <div class="control-group">
                                    <label class="control-label">Tiêu đề </label>
                                        <div class="controls">
                                            <input type="text" name="tieude" class="span7" value="<?php if(isset($r)) echo $r[1]?>"/>
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
                                            <textarea name="noidung" class="ckeditor"><?php if(isset($r)) echo $r[3]?></textarea>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn-inverse">Cập nhật</button>      
                                    </div>
                                </div>
                           </form>
                        </div> 
                </div>
                 </div>    
                 
