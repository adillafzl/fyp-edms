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

    <h4> Template : SURAT PELANTIKAN</h4>
    <p style="font-style: italic;"> Please fill in details </p>
    <hr>

    <form action="generate-lantik.php"  method="post">
    <label> Nama Penuh : </label>
        <textarea name="fullname" id="fullname" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
    <label> Jawatan : </label>
        <textarea name="position" id="position" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
    <label> Dilantik Sebagai : </label>
        <textarea name="jawatan" id="jawatan" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
    <label> Dilantik Oleh : </label>
        <textarea name="jabatan" id="jabatan" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
    <label> Program : </label>
        <textarea name="program" id="program" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
    <label> Tarikh Mula : </label>
        <textarea name="start" id="start" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
    <label> Tarikh Akhir : </label>
        <textarea name="end" id="end" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>
    <label> Lokasi : </label>
        <textarea name="lokasi" id="lokasi" class="form-control" style="border-radius: 0px;" cols="1" rows="1" > </textarea> 
        <br>

    <label for="img">Signature :</label> <br>
        <input type="file" id="img" name="img" accept="image/*">
        <br>

        <br>
        <button type="submit" class="btn btn-md btn-outline-primary btn=block" style=""> Generate PDF </button>
    </form>
    </div>
    </div>
    </div>

</body>
</html>