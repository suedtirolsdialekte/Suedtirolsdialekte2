<html>
<head>
	<title>Admin Login</title>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="login.css">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="login.js" type="text/javascript"></script>

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Charset -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	
	<script type="text/javascript">
		setTimeout(function () {   window.scrollTo(0, 1); }, 1000);
	</script>
</head>
<body>
	<div id="login">
		<form action="admin.php" method="post" accept-charset="UTF-8">
			<div id="login-title" >Login</div>
			<input 
			onfocus="javascript:hideText('Username',this);"
			onblur="javascript:showText('Username', this);" 
			id="field" name="username" value="Username"></input><br>
			<input 
			onfocus="javascript:hidePassText('Passwort',this);"
			onblur="javascript:showPassText('Passwort', this);" 
			style="border-top: 1px solid #BDC0C1;" id="field" name="password" value="Passwort"></input><br>
			<input id="submit" value="&#x2713;" type="submit"></input>
		</form>
	</div>
	<?php
		if(!empty($_GET['error'])){
			echo '
			<div id="error">
				<h3>'.$_GET['error'].'</h3>
			</div>
			';
		}
	?>
</body>
</html>