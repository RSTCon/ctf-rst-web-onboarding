<?php

include 'config.php';

if(isset($_POST['register']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['country']))
{
	$username = htmlentities($_POST['username'], ENT_QUOTES);
	$password = htmlentities($_POST['password'], ENT_QUOTES);
	$country  = htmlentities($_POST['country'],  ENT_QUOTES);
	
	$exists_sql = "SELECT * FROM users WHERE username = '" . $username . "'";
	$exists_res = $conn->query($exists_sql);
	
	if($exists_res->num_rows > 0) die('Utilizatorul exista deja!');
	
	$sql = "INSERT INTO users(username, password, country) VALUES('" . $username . "', '" . md5($password) . "', '" . $country . "')";
    
	$results = $conn->query($sql);
    
	if($results) print 'Inregistrare cu succes!';
	else print 'Eroare la inregistrare';

}
else
{
    
?>

Inregistrare <br /><br />

<form method="post" action="register.php">
Username: <input type="text" name="username" /><br />
Password: <input type="password" name="password" /><br />
Country: <input type="text" name="country" value="RO" /><br />
<input type="submit" name="register" value="Inregistrare" />
</form>

<?php

}

?>
