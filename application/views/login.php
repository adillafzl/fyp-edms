<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>

		<h3>Login Form</h3>
		<?php echo isset($error) ? $error : ''; ?>
		<?php echo form_open('Account/process_login'); ?>
    		<table cellpadding="2" cellspacing="2">
    			<tr>
    				<td>Staff ID</td>
    				<td>
    					<input type="text" name="staffid" required="required">
    				</td>
    			</tr>
    			<tr>
    				<td>Password</td>
    				<td>
    					<input type="password" name="password" required="required">
    				</td>
    			</tr>
    			<tr>
    				<td>&nbsp;</td>
    				<td>
    					<input type="submit" value="Login">
    				</td>
    			</tr>
    		</table>
		<?php echo form_close(); ?>

	</body>
</html>