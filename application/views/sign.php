
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>E-Sign</title>
  <meta name="description" content="Signature Pad -">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <link rel="stylesheet" href="<?=base_url('/assests/css/signature-pad.css');?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

 <script data-ad-client="ca-pub-5811452743216102" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

 <style>
.center {
  text-align: center;
  justify-content: center;
  align-items: center;
}

</style>
</head>

<body onselectstart="return false"  style="background-color: #F0FFF0" >

<div class="content">
 
<div class="page-header">
  <h1>E-Signature</h1>      
  <p>Please draw your signature here ;</p>
</div>

<div id="signature-pad" class="signature-pad">
      
      <div class="signature-pad--body">
        <canvas></canvas>
      </div>

      <div class="signature-pad--footer">
          <div class="description">Sign above</div>


      <div class="signature-pad--actions">
        <div>
          <button type="button" class="btn btn-default" data-action="clear">Clear</button>
          <button type="button" class="btn btn-default"    data-action="change-color">Change color</button>
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
  
  <br>

  <script src="<?=base_url('/assests/js/signature_pad.js');?>"></script>
  <script src="<?=base_url('/assests/js/app.js');?>"></script>
</body>
</html>