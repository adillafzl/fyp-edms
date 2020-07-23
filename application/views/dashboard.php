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
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 3px 1px;
  cursor: pointer;
}
.center {
  text-align: center;
  justify-content: center;
  align-items: center;
  padding: 30px;
  padding-left: 150px;
  padding-right: 150px;
}

td{
  height: 250px;
  padding: 8px !important;
  vertical-align: middle !important;
  border-top: none !important;
}

.table{
  width: 100%;
  table-layout: fixed;
  padding: 8px
}

.dashboard-icon{
  font-size: 40px;
}

.button1 {
  width: 100%;
  height: 100%;
  border-radius: 20px;
  box-shadow: 0px 2px 6px 1px #cccccc;
  }

.navtext{
  color: #9fd3f8;
}
</style>
</head>

<body style="background-color: #F0FFF0">

<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #191970">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color: #fff" href="#">NETDOC.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a class="navtext" href="<?php echo site_url('dashboard') ?>">DASHBOARD</a></li>
      <li><a class="navtext" href="<?php echo site_url('documents') ?>">DOCUMENT</a></li>
      <li><a class="navtext" href="<?php echo site_url('signs') ?>">E-SIGNATURE</a></li>
      <li><a class="navtext" href="<?php echo site_url('check') ?>">CHECK</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a class="navtext" href="#"><span class="glyphicon glyphicon-log-in" style="padding-right: 10px"> </span> Logout</a></li>
    </ul>
  </div>
</nav>


<div class="center">
  <table class="table">
    <tr>
      <td>
        <button style="background-color: #49d549" class="button button1" onclick="location.href='<?php echo base_url();?>newpage'" >
        <span class="dashboard-icon glyphicon glyphicon-plus"></span></br></br> CREATE 
        </button>
      </td>
      <td>
        <button style="background-color: #5f5fe3" class="button button1" onclick="location.href='<?php echo base_url();?>documents'" >
        <span class="dashboard-icon glyphicon glyphicon-folder-open"></span></br></br> DOCUMENT
        </button>
    </td>
      <td>
        <button style="background-color: #ff4242" class="button button1" onclick="location.href='<?php echo base_url();?>deletepage'" >
        <span class="dashboard-icon glyphicon glyphicon-trash"></span></br></br> DELETE
        </button>
      </td>
    </tr>
    <tr>
    <td>
        <button style="background-color: #999999" class="button button1" onclick="location.href='<?php echo site_url('Displayuser') ?>'" >
        <span class="dashboard-icon glyphicon glyphicon-cog"></span></br></br> SETTING
        </button>
      </td>
      <td>
      <button style="background-color: #ffbc26" class="button button1" onclick="location.href='<?php echo site_url('Emailform') ?>'" >
    <span class="dashboard-icon glyphicon glyphicon-send"></span></br></br> E-MAIL
    </button>
    </td>
      <td>
      <button style="background-color: #e55ee5" class="button button1"onclick="location.href='<?php echo base_url();?>check'" >
    <span class="dashboard-icon glyphicon glyphicon-check"></span></br></br> CHECK
    </button>
    </td>
    </tr>
  </table>



    <div class="btn-group btn-group-justified">
    <!-- <p>
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
    </p> -->
    </div>
</div>


</body>
</html>
