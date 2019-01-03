<?php
	session_start();
	if(isset($_SESSION['login_user'])){
header("location: ../");
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<script src="../assets/js/jquery.min.js"></script>
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" href="../assets/css/login.css">
</head>
<body >
	<div id="main_login">
		<div class="row">
			<div class="col-md-2">
			</div>
			
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="col-md-8 lgdef">
					<h5>ADMIN </h5>
					<form action="login.php" method="POST">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
							<input type="text" id="name" name="username" placeholder="username" class="form-control"  value="nhat">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
							<input type="password" id="password" name="password" placeholder="**********" class="form-control" value="Nhat98" >
						</div><br>
						<div class="input-group">
							<input type='submit' name='submit' class="btn btn-info "  value="LOGIN">
						</div><br>
						<a href="http://localhost/N031340/mywebsite/">Trở về trang chủ</a>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	<script src="../assets/js/bootstrap.js"></script>
</body>
</html>
<?php
}
?>