<!DOCTYPE html>
<html>
<head>
	<title>pic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>

	<form action="" method="POST" enctype="multipart/form-data">
    <label>File: </label><input type="file" name="image" id="image" />
    <input type="submit"  name="insert" id="insert" value = "Insert" />
</form>

<?php
require 'config.php';

$sql = "";
$action = mysqli_real_escape_string($con, $_GET['action']);
$id = mysqli_real_escape_string($con, $_GET['id']);
if($action == "add") {
    $sql = "UPDATE admins SET legal='1' WHERE id='".$id."'";
} else {
    $sql = "UPDATE admins SET legal='0' WHERE id='".$id."'";
}

if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}
?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id" value="1111111111"/>
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="index.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                    
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $row["name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p class="form-control-static"><?php echo $row["address"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <p class="form-control-static"><?php echo $row["salary"]; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>