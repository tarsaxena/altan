<?php require '../config/db.php' ?>
<?php 
   
   $name = (isset($_FILES['img_name']['name'])? $_FILES['img_name']['name']:'');
   $tmp_name = (isset($_FILES['img_name']['tmp_name'])? $_FILES['img_name']['tmp_name']:'');
   $size =  (isset($_FILES['img_name']['size'])? $_FILES['img_name']['size']:'');
   $location = "../upload/img/";
   $max = 20000000;
   $extension = pathinfo($name,PATHINFO_EXTENSION);
   $valid_format = array("jpg","JPEG","jpeg","JPG");


   if(isset($emp_id) && !empty($emp_id)){
        $validate = $db->query("SELECT * FROM images WHERE `title` = '".$title."' and `alt` = '".$alt."' ");
           if($validate->rowCount() > 0){
                   $response = array("response" => "exist", "message" => "nothing change ");
           }else{
          	    if(isset($title) && !empty($title)){
                       if(in_array($extension,$valid_format)){
                              if($size <= $max){
                                      if(move_uploaded_file($tmp_name, $location.$name)){
                                               $sql = $db->query("UPDATE images SET `title` = '".$title."',`alt` = '".$alt."', `thumb_img` = '".$name."' WHERE `id` = '".$id."'");
                                               if($sql){
                                               	$response = array("response" => "success", "message" => "successfully change !");
                                               }
                                      }else{
                                      	   $response = array("response" => "error", "message" => "uploading error please review your code :-)");
                                      }
                              }else{
                                	$response = array("response" => "size", "message" => "file too big please choose file 2mb !");
                              }
                       }else{
                       	  $response = array("response" => "invalid", "message" => "invalid format ");
                       }
          	    }else {
                      $response = array("response" => "empty", "message" => "please choose file!");
          	    }
           }
   }else{
   	    $validate = $db->query("SELECT * FROM images WHERE `title` = '".$title."' AND `alt` = '".$alt."' ");
   	       if($validate->rowCount() > 0){
   	               $response = array("response" => "exist", "message" => "already exist");
   	       }else{
         	    if(isset($title) && !empty($title)){
                      if(in_array($extension,$valid_format)){
                             if($size <= $max){
                                     if(move_uploaded_file($tmp_name, $location.$name)){
                                            $sql = $db->query("INSERT INTO images(`title`,`alt`,`thumb_img`)VALUES('".$title."','".$alt."','"."img/$name"."')");
                                              if($sql){
                                              	$response = array("response" => "success", "message" => "successfully save !");
                                              }
                                     }else{
                                     	   $response = array("response" => "error", "message" => "uploading error please review your code :-)");
                                     }
                             }else{
                               	$response = array("response" => "size", "message" => "file too big please choose file 2mb !");
                             }
                      }else{
                      	  $response = array("response" => "invalid", "message" => "invalid format ");
                      }
         	    }else {
                     $response = array("response" => "empty", "message" => "please choose file!");
         	    }
   	       }    
   }
   echo json_encode($response);
?>