<?php require '../config/db.php';
    if(isset($emp_id) && !empty($emp_id)){
    	  foreach ($emp_id as $id) {
    	  	          $sql = $db->query("DELETE FROM images WHERE id = '".$id."' ");
    	  	          // if ($sql) {
    	  	          // 	   echo json_encode(array("response" => "success"));
    	  	          // }
    	  }
    }
?>