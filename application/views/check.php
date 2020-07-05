</html><!DOCTYPE html>
<html lang="en">
<head>
  <title>Check</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body  style="background-color: #F0FFF0">



<style type="text/css">
      body {
          color: #566787;
      background: #f5f5f5;
      font-family: 'Varela Round', sans-serif;
      font-size: 13px;
    }
    .table-wrapper {
          background: #fff;
          padding: 20px 25px;
          margin: 30px 0;
      border-radius: 3px;
          box-shadow: 0 1px 1px rgba(0,0,0,.05);
      }
    .table-title {
      padding-bottom: 15px;
      background: #435d7d;
      color: #fff;
      padding: 16px 30px;
      margin: -20px -25px 10px;
      border-radius: 3px 3px 0 0;
      }
      .table-title h2 {
      margin: 5px 0 0;
      font-size: 24px;
    }
    .table-title .btn-group {
      float: right;
    }
    .table-title .btn {
      color: #fff;
      float: right;
      font-size: 13px;
      border: none;
      min-width: 50px;
      border-radius: 2px;
      border: none;
      outline: none !important;
      margin-left: 10px;
    }
    .table-title .btn i {
      float: left;
      font-size: 21px;
      margin-right: 5px;
    }
    .table-title .btn span {
      float: left;
      margin-top: 2px;
    }
      table.table tr th, table.table tr td {
          border-color: #e9e9e9;
      padding: 12px 15px;
      vertical-align: middle;
      }
    table.table tr th:first-child {
      width: 60px;
    }
    table.table tr th:last-child {
      width: 100px;
    }
      table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
      background: #f5f5f5;
    }
      table.table th i {
          font-size: 13px;
          margin: 0 5px;
          cursor: pointer;
      }
      table.table td:last-child i {
      opacity: 0.9;
      font-size: 22px;
          margin: 0 5px;
      }
    table.table td a {
      font-weight: bold;
      color: #566787;
      display: inline-block;
      text-decoration: none;
      outline: none !important;
    }
    table.table td a:hover {
      color: #2196F3;
    }
    table.table td a.edit {
          color: #FFC107;
      }
      table.table td a.delete {
          color: #F44336;
      }
      table.table td i {
          font-size: 19px;
      }
    table.table .avatar {
      border-radius: 50%;
      vertical-align: middle;
      margin-right: 10px;
    }
	
</style>

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

<div class="container">

	<h1>CHECK</h1>
    <hr/>

		<div class="file-upload-wrapper">
		Choose File :
  		<input type="file" id="input-file-now" class="file-upload" />

		</br>

		<button type="button" class="btn btn-info">Upload</button>
		</div>


	</div>
	
</div>

</body>
</html>

