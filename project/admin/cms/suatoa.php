
 <?php
        
            $id=$_REQUEST['id'];
           // Lấy dữ liệu cũ
            $q= "select * from toa where id=$id";
            $rows = $db->query($q);
            $r=$rows->fetch();
            
            
        if($_SERVER["REQUEST_METHOD"]=='POST')
        {
            //Validate du lieu
            $error = array(); //Khoi tao mang loi rong
                 if(empty($_POST['matoa']))
                {
                    $error[]='matoa';
                }
                else
                {
                    $matoa=$_POST['matoa']; 
                }
                if(empty($_POST['tentoa']))
                {
                    $error[]='tentoa';
                }
                else
                {
                    $tentoa=$_POST['tentoa']; 
                }
                if(empty($_POST['tinhtrang']))
                {
                    $error[]='tinhtrang';
                }
                else
                {
                    $tinhtrang=$_POST['tinhtrang']; 
                }
                
                
   
                 if (empty($error))
                 {
                    //Lay du lieu tu form
                    $query = "update toa"
                            . " set matoa='$matoa', tentoa='$tentoa', tinhtrang='$tinhtrang' where id=$id";

                    //Thuc thi cau truy van
                    $count=$db->exec($query);
                     if($count>0){
                         header("location:index.php?page=dstoa");
                     }
                     }
        }
   ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3> Cập nhật Toa</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                               
                                <div class="control-group">
                                   <label class="control-label">Mã Toa</label>
                                    <div class="controls">
                                        <input type="text" name="matoa" class="span6" value="<?php if(isset($r)) echo $r['matoa']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('matoa', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                               
                               <div class="control-group">
                                    <label class="control-label">Tên Toa</label>
                                        <div class="controls">
                                            <input type="text" name="tentoa" class="span6" value="<?php if(isset($r)) echo $r['tentoa']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tentoa', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                <label class="control-label">Tình Trạng</label>
                                  <div class="controls">
                                    <input type="text" name="tinhtrang" class="span6" value="<?php if(isset($r)) echo $r['tinhtrang']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tinhtrang', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
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
