<?php  
  require('../../config.php');  
 
//delete data teacher 
$requese = $_REQUEST;
$id = $requese['deletedata'];  

 $sql = "DELETE FROM informationarticle WHERE id='$id'";
 $conn->query($sql);
 $confirm = "SELECT * FROM informationarticle";
 $auto_increment = "ALTER TABLE informationarticle AUTO_INCREMENT = 1";  
 $result = $conn->query($confirm); 
 if($result->num_rows===0){
 $conn->query($auto_increment);
 }  
 ?>