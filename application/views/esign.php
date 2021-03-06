<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>E-Signature</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--
<script type="text/javascript" src="<?=base_url('/assests/js/jquery-3.4.1.js');?>"></script>"
<script type="text/javascript" src="<?=base_url('/assests/js/bootstrap.min.js');?>"></script>"
-->


<!-- STYLE -->
<style type="text/css">
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-newsletter {
		color: #999;
		font-size: 15px;
	}
	.modal-newsletter .modal-content {
		padding: 40px;
		border-radius: 0;
		border: none;
	}
	.modal-newsletter .modal-header {
		border-bottom: none;
        position: relative;
		text-align: center;
		border-radius: 5px 5px 0 0;
	}
	.modal-newsletter h4 {
		color: #000;
		text-align: center;
		font-size: 30px;
		margin: 0 0 25px;
		font-weight: bold;
		text-transform: capitalize;
	}
	.modal-newsletter .close {
		background: #c0c3c8;
		position: absolute;
		top: -15px;
		right: -15px;
		color: #fff;
		text-shadow: none;
		opacity: 0.5;
		width: 22px;
		height: 22px;
		border-radius: 20px;
		font-size: 16px;
	}
	.modal-newsletter .close span {
		position: relative;
		top: -1px;
	}
	.modal-newsletter .close:hover {
		opacity: 0.8;
	}
	.modal-newsletter .icon-box {
		color: #7265ea;
		display: inline-block;
		z-index: 9;
		text-align: center;
		position: relative;
		margin-bottom: 10px;
	}
	.modal-newsletter .icon-box i {
		font-size: 110px;
	}
	.modal-newsletter .form-control, .modal-newsletter .btn {
		min-height: 46px;
		border-radius: 3px;
	}
	.modal-newsletter .form-control {
		box-shadow: none;
		border-color: #dbdbdb;
	}
	.modal-newsletter .form-control:focus {
		border-color: #7265ea;
		box-shadow: 0 0 8px rgba(114, 101, 234, 0.5);
	}
    .modal-newsletter .btn {
        color: #fff;
        border-radius: 4px;
		background: #7265ea;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
		padding: 6px 20px;
		min-width: 150px;
        border: none;
    }
	.modal-newsletter .btn:hover, .modal-newsletter .btn:focus {
		background: #4e3de4;
		outline: none;
	}
	.modal-newsletter .input-group {
		margin: 30px 0 15px;
	}
	.hint-text {
		margin: 100px auto;
		text-align: center;
	}
  #signArea{
    width:304px;
    margin: 50px auto;
  }
  .sign-container {
    width: 60%;
    margin: auto;
  }
  .sign-preview {
    width: 150px;
    height: 50px;
    border: solid 1px #CFCFCF;
    margin: 10px 5px;
  }
  .tag-ingo {
    font-family: cursive;
    font-size: 12px;
    text-align: left;
    font-style: oblique;
  }
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>

<script type="text/javascript" src="<?=base_url('/assests/js/signature_pad.js');?>"></script>


</head>
<body>

<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-newsletter">
		<div class="modal-content">
			<form action="/examples/actions/confirmation.php" method="post">
				<div class="modal-header">
					<div class="icon-box">
						<i class="fa fa-envelope-open-o"></i>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
				</div>
				<div class="modal-body text-center">
					<h4>E-SIGNATURE</h4>
					<p>Please put your signature ;</p>

<!--Sign Pad -->

          <div id="signature-pad" class="signature-pad">

            <div class="signature-pad--body">
            <canvas id="myCanvas" width="400" height="300" style="border:1px solid #000000;"></canvas>
            <!--  <canvas width="830" height="447" style="touch-action: none;"></canvas> -->
            </div>

            <div class="signature-pad--footer">
              <div class="description">Sign above</div>

              <div class="signature-pad--actions">
                <div>
                  <button type="button" class="btn btn-default" data-action="clear">Clear</button>
                  <button type="button" class="btn btn-default"  data-action="undo">Undo</button>

                </div>
                <div>
        		<button type="button" class="button save" data-action="save-svg" hidden=true></button>
        		<button type="button" class="button save" data-action="save-png" hidden=true></button>
             <button type="button" class="btn btn-primary"  style="background-color:blue"  data-action="save-jpg">Done</button>
                         </div>
              </div>
            </div>
          </div>

					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<p class="hint-text"><strong>Note:</strong> Please refresh the page or return to dashboard.</p>
<center>  <a href="<?php echo site_url('dashboard') ?>"> Dashboard </a> </center>
</body>
</html>
