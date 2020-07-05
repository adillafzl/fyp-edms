<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title> Surat Cuti </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="shortcut icon" href="/favicon.ico">

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
</style>
</head>

<body class="bg">
    <div class="container">
    <div class="row">
    <div class="col-md-6 offset-md-3" style="background: white; padding:20px; box-shadow: 10px 10px 5px #888888; margin-top:30px;">

    <p style="font-style: italic;"> Please choose suitable answers </p>
    <hr>

    <form action="<?php echo site_url('Suratcuti/checkRadio');?>" method="post">

    <p> Who needs to sign the letter? </p>
    <div class="radio">
      <label><input type="radio" name="sign" value="me"> Me</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="sign" value="others"> Others</label>
    </div>
    <div class="radio disabled">
      <label><input type="radio" name="sign" disabled> None</label>
    </div>

    <p> What is the reason for your absence? </p>
    <div class="radio">
      <label><input type="radio" name="reason" value="sick"> Sick</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="reason" value="death"> Death</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="reason" value="emergency"> Emergency</label>
    </div>

    <p> If you are sick, did you go to the hospital?  </p>
    <div class="radio">
      <label><input type="radio" name="hosp" value="yes"> Yes</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="hosp" value="no"> No</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="hosp" value="others" > Others</label>
    </div>

    <p> Did you get a sick certificate from the doctor? </p>
    <div class="radio">
      <label><input type="radio" name="mc" value="yes"> Yes</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="mc" value="no"> No</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="mc" value="others"> Others</label>
    </div>
    </br>
    <button type="submit" name="insert" class="btn btn-success">Submit</button>


  </form>
</div>
    </div>
    </div>
    </div>
</body>
</html>


<?php
/*
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'fyp');

if(isset($_POST['insert']))
{
  $sign = $_POST['sign'];
  $reason = $_POST['reason'];
  $hosp = $_POST['hosp'];
  $mc = $_POST['mc'];

  $query = "INSERT INTO 'surat_cuti' ('sign',reason','hosp','mc') VALUES ('$sign','$reason','$hosp','$mc')";
  $query_run = mysqli_query($connection,$query);

  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Data Saved") </script>';
  }
  else{
    echo '<script type="text/javascript"> alert("Data Not Saved") </script>';
  }
}

*/
?>
