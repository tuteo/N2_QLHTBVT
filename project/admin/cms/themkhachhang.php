
<?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $error = array(); //Khoi tao mang loi rong
                
                if(empty($_POST['tenkh']))
                {
                    $error[]='tenkh';
                }
                else
                {
                    $tenkh=$_POST['tenkh']; 
                }
                if(empty($_POST['cmt']))
                {
                    $error[]='cmt';
                }
                else
                {
                    $cmt=$_POST['cmt']; 
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
                    $query = "insert into khachhang( tenkh, cmt ,ngaysinh,sdt,email ) values('$tenkh', '$cmt', '$ngaysinh', '$sdt', '$email')";
                    $count=$db->exec($query);
                }
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Thêm mới Khách Hàng</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                               
                                 
                               
                               <div class="control-group">
                                    <label class="control-label">Tên Khách Hàng</label>
                                        <div class="controls">
                                    <input type="text" name="tenkh" class="span6" />
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tenkh', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                <label class="control-label">CMT</label>
                                  <div class="controls">
                                <input type="text" name="cmt" class="span6"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('cmt', $error))
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
 