
<?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
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
                    $query = "insert into toa(matoa, tentoa, tinhtrang ) values('$matoa', '$tentoa', '$tinhtrang')";
                    $count=$db->exec($query);
                  
                }
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Thêm mới toa</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                               
                                <div class="control-group">
                                    <label class="control-label">Mã Toa</label>
                                        <div class="controls">
                                            <input type="text" name="matoa" class="span6"/>
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
                                            <input type="text" name="tentoa" class="span6"/>
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
                                    <label class="control-label" >Tình Trạng</label>
                                    <div class="controls">
                                       
                                            <input type="text" class="span6" name="tinhtrang"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tinhtrang', $error))
                                                    {
                                                        echo "Mời nhập thông tin!";
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
 