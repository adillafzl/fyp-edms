<html>
<head> <title></title>

<link rel="stylesheet" href="<?=base_url('/assests/css/signature-pad.css');?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


</head>
<body>
<form method="post">
    <table cellpadding="3" cellspacing="3">
        <tr>
            <td> Username </td>
            <td>
                <input type="text" name="username">
            </td>
        </tr>
        <tr>
            <td> Password </td>
            <td>
                <input type="text" name="password">
            </td>
        </tr>
        <tr>
            <td> Address </td>
            <td>
                <input type="text" name="address">
            </td>
        </tr>
        <tr>
            <td> Signature </td>
            <td>
            <div id="signature-pad" class="signature-pad">
                <div class="signature-pad--body">
                    <canvas></canvas>
                 </div>
            </div>
            </td>
        </tr>
    </table>
</form>

<script src="<?=base_url('/assests/js/signature_pad.js');?>"></script>
<script src="<?=base_url('/assests/js/app.js');?>"></script>

</body>
</html>