<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
.button {
  background-color: #4682B4; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.center {
  text-align: center;
  justify-content: center;
  align-items: center;
}

.button1 {width: 50%;}
</style>
</head>

<body style="background-color: #F0FFF0">

<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #191970">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NETDOC.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url('dashboard') ?>">DASHBOARD</a></li>
      <li><a href="<?php echo site_url('documents') ?>">DOCUMENT</a></li>
      <li><a href="<?php echo site_url('signs') ?>">E-SIGNATURE</a></li>
      <li><a href="<?php echo site_url('check') ?>">CHECK</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>


<div class="center">



    <div class="btn-group btn-group-justified">
    <p>
    <button class="button button1" onclick="location.href='<?php echo base_url();?>newpage'" >CREATE 
    <span class="glyphicon glyphicon-plus"></button> 
    
    <button class="button button1" onclick="location.href='<?php echo base_url();?>'" >UPDATE 
    <span class="glyphicon glyphicon-pencil"></button> </br>

    <button class="button button1" onclick="location.href='<?php echo base_url();?>deletepage'" >DELETE
    <span class="glyphicon glyphicon-trash"></button>
    
    <button class="button button1" onclick="location.href='<?php echo base_url();?>documents'" >DOCUMENT
    <span class="glyphicon glyphicon-folder-open"></button> </br>

    <button class="button button1" onclick="location.href='<?php echo base_url();?>dashboard'" >DASHBOARD
    <span class="glyphicon glyphicon-th-large"></button>
    
    <button class="button button1"onclick="location.href='<?php echo base_url();?>check'" >CHECK
    <span class="glyphicon glyphicon-copyright-mark"></button> </br></br>
    </p>
    </div>
</div>


</body>
</html>
