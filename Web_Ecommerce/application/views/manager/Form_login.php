

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>E-commerce Login Form</title>
  
  <!--
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
-->
      <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

  
</head>

<body>

  <div class="login-wrap">
	<form method="post" name="MainProgram" action="<?php echo base_url(); ?>index.php/manager/login/valid">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="username" class="label">Username</label>
					<input id="username" type="text" class="input" name="username">
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input id="password" type="password" class="input" name="password" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="submit">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			
		</div>
	</div>
	</form>
</div>
  
  

</body>

</html>
