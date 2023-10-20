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
		if(isset($_POST["btnAdd"]))
		{
				$id = $_POST["txtID"];
				$name = $_POST["txtName"];
				$address = $_POST["txtAddress"];
				$err="";
				if($id==""){
					$err.="<li>Enter Supplier ID, please</li>";
				}
				if($name==""){
					$err.="<li>Enter Supplier Name, please</li>";
				}
				if($err!=""){
					echo "<ul>$err</ul>";
				}
				else{
					$id = htmlspecialchars(mysqli_real_escape_string($conn, $id));
					$name = htmlspecialchars(mysqli_real_escape_string($conn, $name));
					$des = htmlspecialchars(mysqli_real_escape_string($conn, $address));
					$sq="Select * from suppier where sup_id='$id' or sup_name='$name'";
					$result = mysqli_query($conn,$sq);
					if(mysqli_num_rows($result)==0)
					{
						mysqli_query($conn, "INSERT INTO suppier (sup_id, sup_name, sup_address) VALUES ('$id','$name','$address')");
						echo '<meta http-equiv="refresh" content="0;URL=?page=supplier_management"/>';
					}
					else
					{
						echo "<li>Duplicate Supplier ID or Name</li>";

					}
				}
		}
	?>

<div class="container">
	<h2>Adding Supplier</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Supplier ID(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Supplier ID" value='<?php echo isset($_POST["txtID"])?($_POST["txtID"]):"";?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Supplier Name(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Supplier Name" value='<?php echo isset($_POST["txtName"])?($_POST["txtName"]):"";?>'>
							</div>
					</div>
                    
                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Address(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtDes" id="txtDes" class="form-control" placeholder="Address" value='<?php echo isset($_POST["txtAddress"])?($_POST["txtAddress"]):"";?>'>
							</div>
					</div>
                    
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnAdd" id="btnAdd" value="Add new"/>
                              <input type="button" class="btn btn-primary" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='?page=supplier_management'" />
                              	
						</div>
					</div>
				</form>
				<?php
}
else 
{
    echo '<script>alert("You are not admin")</script>';
    echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
}
?>
	</div>