<?php
	// get value passe from form in login.php file
	$username = $ post{"username"}
	$username = $ post{"password"}

	// to prevent mysql injectiom
$username = stripcslather($username);
$password = stripcslather($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
	// connect to the sever and select database
	mysql_connect("localhost", "root", "");
	mysql_select_db("login");
	// Query the database for user
$result = mysql_query("select * from users where username = "$"username" and pasword = "$passwoed"") 
or die("failed to query database" .mysql_ error());
row = mysql_fetch_array($result);
if ($row["username"] == $username && $row["password"] ==$password )(
	echi "login success!!! welcome = $row "username ];
)else (
echo "fail to login"'
)

?>