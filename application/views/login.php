<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login bibook Payment Manager</title>

	<style type="text/css">
	.error {
		color: red;
	}
	</style>
</head>
<body>

<div class="container">
	
   <h1>Simple Login with CodeIgniter</h1>
   <?php
    echo form_open('login');
    echo form_fieldset('Login :');
    echo form_label('Username :');
    echo form_input('username').'<br />';
    echo form_error('username');    
    echo form_label('Password :');
    echo form_password('password').'<br />';
    echo form_error('password');
    echo form_submit('ok','Login');
    echo form_fieldset_close();    
    ?> 
 
</div>

</body>
</html>