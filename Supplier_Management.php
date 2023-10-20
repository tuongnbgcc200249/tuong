<?php
    if(isset($_SESSION['admin']) && $_SESSION['admin']==1)
    {
?> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script>
            function deleteConfirm() {
                if(confirm("Are you sure to delete?")) {
                    return true;
                }
                else {
                    return false;
                }
            }
        </script> 
        <?php
            include_once("connection.php");
            if(isset($_GET["function"])=="del") {
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    mysqli_query($conn, "DELETE FROM suppier WHERE sup_id='$id'");
                }
            }
        ?>
            <form name="frm" method="post" action="">
            <h1>Supplier</h1>
            <p>
            <img src="images/add.png" alt="Add new" width="16" height="16" border="0" />
            <a href="?page=add_supplier"> Add</a>
            </p>
            <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Supplier Name</strong></th>
                     <th><strong>Address</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

            <tbody>
            <?php
                include_once("connection.php");
                $No=1;
                $result = mysqli_query($conn, "SELECT * FROM suppier");
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
            ?>
            <tr>
              <td class="cotCheckBox"><?php echo $No; ?></td>
              <td><?php echo $row["sup_name"]; ?></td>
              <td><?php echo $row["sup_address"]; ?></td>
              <td style='text-align:center'> <a href="?page=update_supplier&&id=<?php echo $row["sup_id"]; ?>">
              <img src='images/edit.png' border='0' /></td>
              <td style='text-align:center'>
              <a href="?page=supplier_management&&function=del&&id=<?php echo $row["sup_id"]; ?>" onclick="return deleteConfirm()">
              <img src='images/delete.png' border='0' /></a></td>
            </tr>
            <?php
                $No++;
                }
            ?>
            </tbody>
        </table>  
        <div class="row" style="background-color:#FFF">
            <div class="col-md-12">
                
            </div>
        </div>
         </form>
<?php
    }
    else{
        echo '<script>alert("You are not admin")</script>';
        echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
        
    }
?>
