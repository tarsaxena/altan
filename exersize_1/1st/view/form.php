
<div class="container">        
<form method="post" name="employeeForm" id="employeeFormId" enctype="multipart/form-data">
 <table>
 	<tr>
      <td>Title</td>
      <td><input type="text" name="title" id="title"></td>
    </tr>

    <tr>
      <td>Alt</td>
      <td><input type="text" name="alt" id="alt"></td>
    </tr>
      
     <tr>
     	<td>Image</td>
     	<td><input type="file" name="img_name" id="img_name"></td>
        <input type="hidden" name="emp_id" id="emp_id">
	</tr>
	<tr><td colspan="2">
	 <button type="submit" name="btn_save">Save Entry</button>
	</td>
</form>

</div>


