 <?php

 
 
 get column names and display in page
                                                     $sql = "SHOW COLUMNS FROM kipling_school_homepage";

                                                      $result = mysqli_query($conn, $sql);
                                                      
                                                      while ($record = mysqli_fetch_array($result)){
                                                          $fields[] = $record['0']; 
                                                          
                                                      }
                                                    ?>
                                                    
                                                    <th>ID</th>
                                                    <th><?php echo $fields[1]; ?></th>
                                                    <th><?php echo $fields[2]; ?></th>
                                                    <th><?php echo $fields[3]; ?></th>
                                                     <th><?php echo $fields[4]; ?></th>
                                                     <th>options</th>
                                                     
////////////////////////////////////////////////////////////////////////////////////////////////////////////        


 <?php echo $row["$fields[3]"]; ?>

function get_col_names(){  
    $sql = "SHOW COLUMNS FROM tableName";  
    $result = mysql_query($sql);     
    while($record = mysql_fetch_array($result)){  
     $fields[] = $record['0'];  
    }
    foreach ($fields as $value){  
      echo 'column name is : '.$value.'-';  
}  
 }  

return get_col_names();

CHANGE $column_image $editimage varchar(255)


 <label class="col-sm-3 control-label no-padding-right " for="form-field-1" style="text-align: left;">
                                                                    
                                                                      <input type="text"  id="form-field-1" name="editmission" 
                                                                               value="<?php echo $fields[2]; ?>" style="width:50%"/>  
                                                                       
                                                                        <input type="hidden"  id="form-field-1" name="column_mission" 
                                                                               value="<?php echo $fields[2]; ?>"/>
                                                                        
                                                                    </label>
                                                                    <div class="col-xs-12 col-sm-9">
                                                                        
                                                                        <input type="text"  id="form-field-1" name="mission" 
                                                                               value="<?php echo $row["$fields[2]"]; ?>" style="width:50%"/>
                                                                    </div>