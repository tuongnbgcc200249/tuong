<?php
if(isset($_SESSION['admin']) && $_SESSION['admin']==1)
{
?>
<!-- Bootstrap --> 
<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
   <?php
	include_once("connection.php");
	
	if(isset($_GET['id'])) 
	{
		$id=$_GET['id'];
		$result= mysqli_query($conn,"SELECT * FROM suppier WHERE sup_id ='$id'");
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$sup_id= $row['sup_id'];
		$sup_name= $row['sup_name'];
		$sup_address= $row['sup_address'];
		
	?>
<div class="container">
	<h2>Updating Supplier</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Supplier ID(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Supplier ID" readonly 
								  value='<?php echo $sup_id;?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Supplier Name(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Supplier Name" 
								  value='<?php echo $sup_name;?>'>
							</div>
					</div>
                    
                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Description(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtDes" id="txtDes" class="form-control" placeholder="Address" 
								  value='<?php echo $sup_address;?>'>
							</div>
					</div>
                    
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnUpdate" id="btnUpdate" value="Update"/>
                              <input type="button" class="btn btn-primary" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='?page=supplier_management'" />
                              	
						</div>
					</div>
				</form>
	</div>
    <?php
	} 
	else 
	{
		echo '<meta http-equiv="refresh" content="0;URL=Supplier_Management.php"/>';
	}
	?>


	<?php
   if(isset($_POST["btnUpdate"])) 
   {
	   $id= $_POST["txtID"];
	   $name= $_POST["txtName"];
	   $address= $_POST["txtAddress"];
	   $err="";
	   if($name=="") 
	   {
		   $err.="<li>Enter Supplier Name, Please</li>";
	   }
	   if($err!="")
	   {
		   echo "<ul>$err</ul>";
	   }
	 else{
		 $sq="select * from suppier where sup_id!='$id' and sup_name='$name'";
		 $result = mysqli_query($conn,$sq);
		 if(mysqli_num_rows($result)==0)
		 {
			 mysqli_query($conn,"update suppier set sup_name ='$name', sup_address='$address' where sup_id='$id'");
			 echo '<meta http-equiv="refresh" content="0;URL=?page=supplier_management"/>';
		 }
		 else {
			 echo "<li>Duplicate Supplier Name </li>";
		 }
		 
	 }

   }
    ?>
<?php
}
else 
{
	echo '<script>alert("You are not admin")</script>';
    echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
}
?>