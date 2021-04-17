<?php

session_start();

include 'config.php';

if(isset($_POST['login']))
{
	$username = htmlentities($_POST['username'], ENT_QUOTES);
	$password = htmlentities($_POST['password'], ENT_QUOTES);
	
	$sql = "SELECT * FROM users WHERE username = '" . $username . "' AND password='" . md5($password) . "'";
    
	$results = $conn->query($sql);
    
	if($results->num_rows == 1)
	{
		$data = mysqli_fetch_array($results, MYSQLI_ASSOC);
		
		$country = html_entity_decode($data['country'], ENT_QUOTES);
		
		// SQL Injection
		
		$sql_country = "SELECT * FROM countries WHERE shortname = '" . $country . "'";
		$country_results = $conn->query($sql_country);
		
		$country_name = 'Tara introdusa nu este corecta!';
		if($country_results->num_rows == 1) 
		{
			$country_data = mysqli_fetch_array($country_results, MYSQLI_BOTH );
			$country_name = $country_data[1];
		}
		
		print 'Salut: ' . $username . '<br />';
		print 'Tara: ' . htmlentities($country_name, ENT_QUOTES);
		
	}
	else print 'Login nu prea a mers!';
}
else
{

?>

Login <br />
<form method="post" action="login.php">
Username: <input type="text" name="username" /><br />
Password: <input type="password" name="password" /><br />
<input type="submit" name="login" value="Login" />
</form>

<?php

}

?>
