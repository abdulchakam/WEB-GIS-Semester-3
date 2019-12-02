<?php
    session_start();
    if(isset($_SESSION['susername'])){
        header("location:index.php");
    };
    if(isset($_POST['submit'])){
		//koneksi
		require_once "../function_login.php";
		//mengambil data form
		$username = $_POST['Username'];
		$password = MD5($_POST['Password']);
		$login->cekLogin($username,$password);

		//tutuo koneksi
		$login->conn = null;
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
		<script src="../bootstrap4/js/bootstrap.js"></script>
		<script src="../bootstrap4/js/jquery.js"></script>
        <title>Login Page</title>

        <style>
            .card-login{
                background-image: linear-gradient(#F0F6FB, #ffffff);
            }
        </style>
	</head>
<body>
<div style="height: 100vh;" class="d-flex justify-content-center align-items-center">
    <div class="col-4 card-login">
        <div class="card-body mb-3">
        <img src="images/admin.png" width="100px" class="rounded mx-auto d-block">
                <h3><center> Login!</center></h3>
    <form id="loginform" method="POST">
        <div class="form-group">
            <input class="form-control" type="text" name="Username" placeholder="username" require>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="Password" placeholder="password" require>
        </div>
            <button class="btn btn-primary form-control" type="submit" name="submit">Login</button>
    </form>
        </div>
    </div>
</div>
</body>
</html>