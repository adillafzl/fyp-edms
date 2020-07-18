</html><!DOCTYPE html>
<html lang="en">
<head>
  <title>Documents</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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

<!--
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});

$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
-->

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

    <h3> DOCUMENTS </h3>
    <br>
    


  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Document Name</th>
        <th>Signed</th>
        <th>Pending</th>
        <th>Actions</th>       
      </tr>
    </thead>
    <tbody>
      <?php
        $docid = 1;
        foreach ($result as $r) { ?>

        <tr>
          <td> <?php echo $docid++ ?> </td>
          <td> <?php echo $r['docname'] ?> </td>
          <td> </td>
          <td><span class="glyphicon glyphicon-ok-circle"> </td>
          <td>
            <a href="#" class="settings" title="Favourite" data-toggle="tooltip"><i class="material-icons">favorite</i></a> &nbsp;
            <a href="<?php echo site_url('Emailform') ?>" class="settings" title="Send eMail" data-toggle="tooltip"><i class="material-icons">email</i></a> &nbsp;
            <a href="try" download  class="settings" title="Download" data-toggle="tooltip"><i class="material-icons">file_download</i></a> &nbsp;
            <a href="<?php echo site_url('check') ?>" class="settings" title="Check" data-toggle="tooltip"><i class="material-icons">check</i></a> &nbsp;
          </td>
        </tr>
      <?php } ?>
   </tbody>
  </table>
</div>

</body>
</html>

<!--
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
-->