
<?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
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
                    $query = "insert into nhanvien(manv, tennv,ngaysinh,sdt,email ) values('$manv','$tennv', '$ngaysinh', '$sdt', '$email')";
                    $count=$db->exec($query);
                }
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Thêm mới Nhân Viên</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                               
                                 <div class="control-group">
                                   <label class="control-label">Mã Nhân Viên</label>
                                    <div class="controls">
                                        <input type="text" name="manv" class="span6" />
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
                                    <input type="text" name="tennv" class="span6" />
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
                                    <input type="text" name="ngaysinh" class="span6"/>
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
                                        <input type="text" name="sdt" class="span6" />
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
                                            <input type="text" name="email" class="span6" />
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
                                        <button type="submit" class="btn-inverse">Thêm mới</button>      
                                    </div>
                                </div>
                           </form>
                        </div> 
                </div>
             </div>
 