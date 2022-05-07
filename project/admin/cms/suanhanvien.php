
 <?php
        
            $id=$_REQUEST['id'];
           // Lấy dữ liệu cũ
            $q= "select * from nhanvien where id=$id";
            $rows = $db->query($q);
            $r=$rows->fetch();
            
            
        if($_SERVER["REQUEST_METHOD"]=='POST')
        {
            //Validate du lieu
            $error = array(); //Khoi tao mang loi rong
                if(empty($_POST['manv']))
                {
                    $error[]='manv';
                }
                else
                {
                    $manv=$_POST['manv']; 
                }
                if(empty($_POST['tennv']))
                {
                    $error[]='tennv';
                }
                else
                {
                    $tennv=$_POST['tennv']; 
                }
               
                 if(empty($_POST['ngaysinh']))
                {
                    $error[]='ngaysinh';
                }
                else
                {
                    $ngaysinh=$_POST['ngaysinh'];
                }
                if(empty($_POST['sdt']))
                {
                    $error[]='sdt';
                }
                else
                {
                    $sdt=$_POST['sdt'];
                }
                if(empty($_POST['email']))
                {
                    $error[]='email';
                }
                else
                {
                    $email=$_POST['email'];
                }

                 if (empty($error))
                 {
                    //Lay du lieu tu form
                    $query = "update nhanvien"
                            . " set manv='$manv', tennv='$tennv', ngaysinh='$ngaysinh', sdt='$sdt', email='$email' where id=$id";

                    //Thuc thi cau truy van
                    $count=$db->exec($query);
                     if($count>0){
                         header("location:index.php?page=dsnv");
                     }
                     }
        }
   ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3> Cập nhật Nhân Viên</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                               
                                <div class="control-group">
                                   <label class="control-label">Mã Nhân Viên</label>
                                    <div class="controls">
                                        <input type="text" name="manv" class="span6" value="<?php if(isset($r)) echo $r['manv']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('manv', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                               
                               <div class="control-group">
                                    <label class="control-label">Tên Nhân Viên</label>
                                        <div class="controls">
                                    <input type="text" name="tennv" class="span6" value="<?php if(isset($r)) echo $r['tennv']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tennv', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                                <div class="control-group">
                                   <label class="control-label">Ngày Sinh</label>
                                    <div class="controls">
                                    <input type="text" name="ngaysinh" class="span6" value="<?php if(isset($r)) echo $r['ngaysinh']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('ngaysinh', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                                <div class="control-group">
                                   <label class="control-label">SĐT</label>
                                    <div class="controls">
                                        <input type="text" name="sdt" class="span6" value="<?php if(isset($r)) echo $r['sdt']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('sdt', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                               
                               <div class="control-group">
                                    <label class="control-label">Email</label>
                                        <div class="controls">
                                            <input type="text" name="email" class="span6" value="<?php if(isset($r)) echo $r['email']; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('email', $error))
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
