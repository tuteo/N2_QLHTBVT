
<?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $error = array(); //Khoi tao mang loi rong
               
                 if(empty($_POST['toa_id']))
                {
                    $error[]='toa_id';
                }
                else
                {
                    $soghe=$_POST['toa_id']; 
                }
  
                if(empty($_POST['soghe']))
                {
                    $error[]='soghe';
                }
                else
                {
                    $soghe=$_POST['soghe']; 
                }
  
                if (empty($error))
                {                      
                    $query = "insert into ghe(soghe,toa_id) values('$soghe','$toa_id')";
                    $count=$db->exec($query);
                  
                }
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Thêm mới Ghế</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                            ∑ 
                                <div class="control-group">
                                    <label class="control-label">Số Ghế</label>
                                        <div class="controls">
                                            <input type="text" name="soghe" class="span6"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('soghe', $error))
                                                    {
                                                        echo "Mời nhập thông tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                                <div class="control-group">
                                    <label class="control-label">Toa_ID</label>
                                        <div class="controls">
                                            <input type="text" name="toa_id" class="span6"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('toa_id', $error))
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
 