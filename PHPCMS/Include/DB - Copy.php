
<?php
//require_once("Functions.php");
$Connection=mysqli_connect('localhost','root','','phpcms');
$Username =mysqli_real_escape_string($Connection,"jazeb");
$Password =mysqli_real_escape_string($Connection,"akram");;


function Login_Attempt($Username,$Password){
    $Connection=mysqli_connect('localhost','root','','phpcms');
    $Query="SELECT * FROM registration
    WHERE username='$Username' AND password='$Password'";
    $Execute=mysqli_query($Connection,$Query);
	$admin=mysqli_fetch_assoc($Execute);
	return $admin;
}
	
	$Found_Account=Login_Attempt($Username,$Password);	   
	
	
	$_SESSION["User_Id"]=$Found_Account["id"];
	$_SESSION["Username"]=$Found_Account["username"];
	echo $_SESSION["User_Id"];
	echo $_SESSION["Username"];
	$_SESSION["SuccessMessage"]="Welcome  {$_SESSION["Username"]} ";
	echo $_SESSION["SuccessMessage"];
	Redirect_to("Dashboard.php");
	
	

?>