<?php
require 'admin/connection.php';
session_start();
if (!isset($_SESSION['rid'])) {
	header('location:login.php');
} else {
	if (isset($_SESSION['rid'])) {
		$id = $_SESSION['rid'];
		$sql = "SELECT * FROM receivers WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php require 'head.php'; ?>
<style>
	body {
		background: #212529;
		min-height: 0;
		height: 800px;
	}

	.login-form {
		width: calc(100% - 20px);
		max-height: 650px;
		max-width: 450px;
		background-color: white;
	}
</style>

<body>
	<?php require 'header.php'; ?>
	<div class="container cont">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-8 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/user.png" alt="profile" class="rounded-circle" width="60" height="60">
					</div>
					<div class="card-body">
						<form action="#" method="post">
							<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Name</label>
							<span class="form-control mb-3"><?php echo $row['rname']; ?></span>
							<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Email</label>
							<span class="form-control mb-3"><?php echo $row['remail'] ?></span>
							<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Password</label>
							<span class="form-control mb-3"><?php echo $row['rpassword']; ?></span>
							<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Phone Number</label>
							<span class="form-control mb-3"><?php echo $row['rphone']; ?></span>
							<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver City</label>
							<span class="form-control mb-3"><?php echo $row['rcity']; ?></span>
							<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Blood Group</label>
							<span><?php echo $row['rbg']; ?></span>
						</form>
					</div>
					<a href="Userpage.php" class="text-center btn-primary w-25 m-auto">Back</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>

</html>