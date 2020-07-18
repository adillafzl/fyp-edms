<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>HOME</title>

<link href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans|Francois+One:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  
	.name{
		text-align: center;
    	font-weight: bold;
    	font-size: 16px;
		color: #507cc0;
	}
    
	body {
		color: #fff;
		background: #9e9e9e;
		font-family: 'Open Sans', sans-serif;
        background-image: url('cloud.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
	}
    .form-control {
		min-height: 41px;
		background: #fff;
        border-color: #e3e3e3;
		box-shadow: none !important;
		border-radius: 4px;
	}   
	.form-control:focus {
		border-color: #99c432;
	}
	.login-form {
		width: 310px;
		margin: 0 auto;
		padding: 100px 0 30px;	
        color: #99ccff;	
	}
    .login-form form {
		color: #999;
		border-radius: 10px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;	
		position: relative;	
    }
	.login-form h2 {		
		font-size: 24px;
		color: #454959;
        margin: 45px 0 25px;
		font-family: 'Francois One', sans-serif;
    }
	.login-form .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -50px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #70c5c0;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.login-form .avatar img {
		width: 100%;
	}
    .login-form .btn {
        color: #fff;
        border-radius: 4px;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
    .login-btn {        
        font-size: 16px;
        font-weight: bold;
		background: #99c432;		
		margin-bottom: 20px;
    }
	.login-btn:hover, .login-btn:active {
		background: #86ac2d !important;
	}
	.social-btn {
		padding-bottom: 15px;
	}
	.social-btn .btn {		
        margin-bottom: 10px;
		font-size: 14px;
		text-align: left;
    }	
	.social-btn .btn:hover {
		opacity: 0.8;
		text-decoration: none;
	}	
    .social-btn .btn-primary {
        background: #507cc0;
        text-align: center
    }
	.social-btn .btn-info {
		background: #64ccf1;
	}
	.social-btn .btn-danger {
		background: #df4930;
	}
	.social-btn .btn i {
		float: left;
		margin: 1px 10px 0 5px;
		min-width: 20px;
		font-size: 18px;
	}
    .or-seperator {
		height: 0;
        margin: 0 auto 20px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
		width: 30%;
    }
    .or-seperator i {
        padding: 0 10px;
		font-size: 15px;
		text-align: center;
		background: #fff;
		display: inline-block;
		position: relative;
		top: -13px;
		z-index: 1;
    }
	.login-form a {
		color: #fff;
		text-decoration: underline;
	}
	.login-form form a {
		color: #999;
		text-decoration: none;
	}	
	.login-form a:hover, .login-form form a:hover {
		text-decoration: none;
	}
	.login-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>

<body class="dark-edition">
<div class="login-form">
<div>
    <form action="/examples/actions/confirmation.php" method="post">
		<div class="avatar">
			<img src="home.png" alt="Avatar" />
		</div>
        </br></br>
        <h4 class="text-center">Login as :</h4>
        </br>
		<div class="social-btn text-center">
			<a href="index.php/Loginadmin/index" class="btn btn-primary btn-block btn-lg">Admin</a>
			<a href="index.php/Loginlecturer/index" class="btn btn-primary btn-block btn-lg">Lecturer</b></a>
		</div>

    <p class="text-center small">Don't have an account? <a href="index.php/Register/index" style="color: #507cc0"><b>Sign up here!</b></a></p>
</div>
<div class="name">NETDOC.com : Online Letter Generation System</div>
</div>
</body>
</html>