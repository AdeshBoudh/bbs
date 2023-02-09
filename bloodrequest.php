<?php 
require 'admin/connection.php'; 
session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
    $hid = $_SESSION['hid'];
    $sql = "select bloodrequest.*, receivers.* from bloodrequest, receivers where hid='$hid' && bloodrequest.rid=receivers.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php require 'head.php'; ?>
<style>
    body{
    height: 650px;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
<body>
	<?php require 'header.php'; ?>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Blood Bank System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="rprofile.php">My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="abs.php">Blood available</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	<div class="container cont">

		<?php require 'message.php'; ?>

	<table class="table table-responsive table-striped rounded mb-5">
		<tr><th colspan="9" class="title">Blood requests</th></tr>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>City</th>
			<th>Phone</th>
			<th>Blood Group</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		</tr>

		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">No one has requested yet. </b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo ++$counter;?></td>
			<td><?php echo $row['rname'];?></td>
			<td><?php echo $row['remail'];?></td>
			<td><?php echo $row['rcity'];?></td>
			<td><?php echo $row['rphone'];?></td>
			<td><?php echo $row['bg'];?></td>
			<td><?php echo 'You have '.$row['status'];?></td>
			<td><?php if($row['status'] == 'Accepted'){ ?> <a href="" class="btn btn-success disabled">Accepted</a> <?php }
			else{ ?>
				<a href="admin/accept.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-success">Accept</a>
			<?php } ?>
			</td>
			<td><?php if($row['status'] == 'Rejected'){ ?> <a href="" class="btn btn-danger disabled">Rejected</a> <?php }
			else{ ?>
				<a href="admin/reject.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-danger">Reject</a>
			<?php } ?>
			</td>
			
		</tr>
		<?php } ?>
	</table>
</div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php } ?>