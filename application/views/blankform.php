<?php



require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['namerec']) && isset($_POST['addrec']) && isset($_POST['title']) && isset($_POST['content']))

{

$namerec = $_POST['namerec'];
$addrec = $_POST['addrec'];
$title = $_POST['title'];
$content = $_POST['content'];

$mpdf = new \Mpdf\Mpdf();

$data = "";

$data .= "<h1>PDF</h1>";

$data .= $namerec.'<br>';

$data .= $addrec.'<br>';

$data .= '<hr>';

$data .= "<strong> Tuan/Puan, </strong> <br> <br>";

$data .= "<strong><u>$title</u></strong> <br> <br> <br>";

$data .= $content.'<br>';

//$data .= "<b><u>Tuan/Puan</u></b>" '<br>';

$data .= $message.'<br>';

$mpdf->WriteHtml($data);

$mpdf->output("myfile.pdf",'D');

}

/*$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body  style="background-color: #F0FFF0">

<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #191970">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NETDOC.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url('dashboard') ?>">DASHBOARD</a></li>
      <li><a href="<?php echo site_url('documents') ?>">DOCUMENT</a></li>
      <li><a href="<?php echo site_url('esign') ?>">E-SIGNATURE</a></li>
      <li><a href="<?php echo site_url('check') ?>">CHECK</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">

  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      
    /* Modal styles */
    .modal .modal-dialog {
      max-width: 400px;
    }
    .modal .modal-header, .modal .modal-body, .modal .modal-footer {
      padding: 20px 30px;
    }
    .modal .modal-content {
      border-radius: 3px;
    }
    .modal .modal-footer {
      background: #ecf0f1;
      border-radius: 0 0 3px 3px;
    }
      .modal .modal-title {
          display: inline-block;
      }
    .modal .form-control {
      border-radius: 2px;
      box-shadow: none;
      border-color: #dddddd;
    }
    .modal textarea.form-control {
      resize: vertical;
    }
    .modal .btn {
      border-radius: 2px;
      min-width: 100px;
    }
    .modal form label {
      font-weight: normal;
    }
  </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
<title>Blank Template</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Blank Template</h1>
        <p>Please fill in the form below :</p>

        <form action="blanktemps" method="post">

        <input type="text" name="namerec" class="form-control" placeholder="Receiver's Name" required> </br>
        <input type="text" name="addrec" class="form-control" placeholder="Receiver's Address" required> </br>
        <input type="text" name="title" class="form-control" placeholder="Title" required> </br>
        <textarea class="form-control" name="content" placeholder="Content"> 
        
        </textarea> </br>
        <button class="btn btn-success" type="submit">Create</button>
        </form>
    </div>
</body>
</html>