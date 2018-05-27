<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home work</title>

</head>
<body>
<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

if ($login === 'admin' && $password === 'Password'){
	$isAuthorized = true;
} else {
	$isAuthorized = false;
}

?>

<p>
	<?php echo $isAuthorized ? 'login right' : 'Login unright'; ?>
</p>

</body>
</html>