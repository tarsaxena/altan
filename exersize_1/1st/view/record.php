<?php require '../config/db.php' ;

//code for Pagination
    $limit = 5;
    $start = 1;
    $r = $db->query("SELECT COUNT(*) FROM images");
    $total = $r->fetchColumn();
    $page = ($total/$limit);

    if(isset($id) && !empty($id)){
    	$id = $id;
    	$start = ($id - 1) * $limit;
    }else{
    	$id = 1;
    }
?>

<?php 
     $sql = "SELECT * FROM  images LIMIT ".$start.','.$limit;
 ?>
<?php $show = $db->query($sql); ?>

<div class="container">        
<table class="table">
	   <thead>
	   	     <tr>
	   	     	 <th>#</th>
              <th>Id</th>
	   	     	 <th>Image</th>
	   	     	 <th>Title</th>
	   	     	 <th>Alt</th>
             <th>Action</th>
	   	     </tr>
	   </thead>
	   <tbody>
	   	      <?php if($show->rowCount() > 0 ){ ?>
                      <?php for($i=0;$row=$show->fetch(PDO::FETCH_OBJ);$i++){ ?>
                            <tr id="<?php echo $row->id ?>">
                               <td><input type="checkbox" name="emp_id[]" id="emp_id" value="<?php echo $row->id ?>"></td>
                            	 <td><?php echo $row->id ?></td>
                            	 <td><img class="zoom" src="upload/<?php echo $row->thumb_img;?>" width="45" height="45  "></td>
                                 <td><?php echo $row->title ?></td>
                                 <td><?php echo $row->alt ?></td>
                                 <td>
                                   <a href="javascript:void(0)" id="addForm">Add </a>|
                                 	 <!-- <a href="javascript:void(0)" id="viewData" data-id="<?php echo $row->id;?>">Edit</a>  -->
                                   <a href="javascript:void(0)" id="deleteData" data-id="<?php echo $row->id;?>">Delete</a>
                                 </td>
                            </tr>
                      <?php } ?>
	   	      <?php } else { ?>
                     <tr>
                     	 <td colspan="5">No Record Found</td>
                    </tr>
	   	       <?php }?>
	   </tbody>
</table>


<a href="javascript:void(0)" id="multipleDelete">Delete Selected</a>
<ul class="pagination" style="float:right">

	 <?php if($id > 1){ ?>
          <li><a href="javascript:void(0)" id="page-link" data-id="<?php echo ($id-1) ?>">Prev</a></li>
	 <?php }else {
	 	   echo "<li class='disabled'>Prev</li>";
	 }?>
	 
     <?php for($i=1;$i <= $page;$i++){
      	if($id == $i){
              
      		     //echo "<li class='active'>".$i."</li>";	
        	}else{
      			 echo "<li><a href='javascript:void(0)' class='active' data-id='".$i."' id='page-link'>".$i."</a></li>";
      			 
      	}    
      
      }?>	  


	  <?php if($page != $id){ ?>
          <li><a href="javascript:void(0)" id="page-link" data-id="<?php echo ($id+1) ?>">Next</a></li>
	 <?php }else {
	 	    echo "<li class='disabled'>Next</li>";
	 }?>
   x
</ul>



</div>



