<?php require '../config/db.php';

     if(isset($emp_id) && !empty($emp_id)){
   	       $sql = $db->query("DELETE FROM images WHERE id = '".$emp_id."'");
   	       if($sql){
   	       	   echo json_encode(array("response" => "success" ));
   	       }
   }
?>