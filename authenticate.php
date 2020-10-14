<?php
	
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {

	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['username'], $_POST['password']) ) {

	exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {

	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();

	$stmt->store_result();



}

	
if ($stmt -> num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();

	if (password_verify($_POST['password'], $password)) {
	
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		echo 'Welcome ' . $_SESSION['name'] . '!';
		$link_address1 = 'home.php';
		$link_address2 = 'login.html';
		header('Location: home.php');
		echo "<a href='$link_address1'>To the Page</a>";
		
	} else {
		echo 'Incorrect password! <br>';
		echo '<!DOCTYPE html> <html> <body> <a href="login.html">To the Page</a> </body> </html>';
	}
} else {
	echo 'Incorrect username! <br>';
	echo '<!DOCTYPE html> <html> <body> <a href="login.html">To the Page</a> </body> </html>';
}

?>

