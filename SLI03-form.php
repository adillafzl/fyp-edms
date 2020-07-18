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

    <h4> Template : SLI-03</h4>
    <p style="font-style: italic;"> Sila isi borang berikut : </p>
    <hr>

    <form action="generate-SLI03.php" method="post">
        <label> NAMA PELAJAR : </label>
        <textarea name="name" id="name" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
        <label> NO UITM : </label>
        <textarea name="studid" id="studid" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
        <label> NO KAD PENGENALAN : </label>
        <textarea name="nric" id="nric" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
        <label> PROGRAM : </label>
        <textarea name="program" id="program" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
        <label> INSTITUSI : </label>
        <textarea name="uni" id="uni" class="form-control" style="border-radius: 0px;" cols="1" rows="1"> </textarea> 
        <br>
        <label> TEMPAT LATIHAN : </label> <br>
        <textarea name="place" id="place" class="form-control" style="border-radius: 0px;" cols="1" rows="1"> </textarea>
        <br>
        <label> TARIKH LATIHAN : </label> <br>
        <textarea name="datea" id="datea" class="form-control" style="border-radius: 0px;" cols="1" rows="1"> </textarea>
        <br>
        <label> TARIKH LAPOR DIRI : </label> <br>
        <textarea name="dateb" id="dateb" class="form-control" style="border-radius: 0px;" cols="1" rows="1"> </textarea>
        <br>
        <br>
        <button type="submit" class="btn btn-md btn-outline-primary btn=block" style=""> Generate PDF </button>
    </form>
    </div>
    </div>
    </div>
</body>
</html