<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title> Email </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="shortcut icon" href="/favicon.ico">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
    body, html {
        height: 100%;
        background-image: url('cloudpink.jpg');
    }
    .bg {
        background-image: url("cloudpink.jpg");
        height: 100%;
        background-position: center;
        background-repeat: repeat-y;
        background-size: cover;
    }
    #custom-search-input{
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 6px;
    background-color: #fff;
    }

    #custom-search-input input{
        border: 0;
        box-shadow: none;
    }

    #custom-search-input button{
        margin: 2px 0 0 0;
        background: none;
        box-shadow: none;
        border: 0;
        color: #666666;
        padding: 0 8px 0 10px;
        border-left: solid 1px #ccc;
    }

    #custom-search-input button:hover{
        border: 0;
        box-shadow: none;
        border-left: solid 1px #ccc;
    }

    #custom-search-input .glyphicon-envelope{
        font-size: 23px;
    }

    .container{
        width: 45%;
    border-radius: 7px;
    height: 10em;
    position: relative;
    margin: 0;
    background: pink;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }


</style>
</head>


<body onselectstart="return false"  style="background-color: #F0FFF0" >

<form action="<?php echo site_url('checkingmail.php');?>" method="post">

<div class="container">
	<div class="row">
        <div class="col-md-12">
    		<h2 style="font-family: monospace">Insert Email Address</h2>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" style="font-family: monospace" name="email" class="form-control input-lg" placeholder="Email Address" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit" name="insert">
                            <i class="glyphicon glyphicon-envelope"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
	</div>
</div>
</form>
</body>
</html>

