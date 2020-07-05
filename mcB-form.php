<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title> Generate PDF </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="shortcut icon" href="/favicon.ico">

<style>
    body, html {
        height: 100%;
    }
    .bg {
        background-image: url("cloudpink.jpg");
        height: 100%;
        background-position: center;
        background-repeat: repeat-y;
        background-size: cover;
    }
</style>
</head>

<body class="bg">
    <div class="container">
    <div class="row">
    <div class="col-md-6 offset-md-3" style="background: white; padding:20px; box-shadow: 10px 10px 5px #888888; margin-top:30px;">

    <h4> Template : MC B</h4>
    <p style="font-style: italic;"> Please fill in details </p>
    <hr>

    <form action="generate-mcB.php" method="post">
        <label> Enter full name : </label>
        <textarea name="fname" id="fname" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
        <label> Staff ID : </label>
        <textarea name="id" id="id" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
        <label> Number of days of absence : </label>
        <textarea name="days" id="days" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
        <label> Reason : </label>
        <textarea name="reason" id="reason" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
        <label> Start date : </label>
        <textarea name="datea" id="datea" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
        <label> End date : </label> <br>
        <input name="dateb" id="dateb" class="form-control" style="border-radius: 0px;" cols="1" rows="1">
        <br>
        <label> Estimated return date : </label>
        <textarea name="edate" id="edate" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br><br>
        <button type="submit" class="btn btn-md btn-outline-primary btn=block" style=""> Generate PDF </button>
    </form>
    </div>
    </div>
    </div>
</body>
</html