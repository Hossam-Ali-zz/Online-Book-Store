<?php 
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'BookStore'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
	NewUser($con);
	function NewUser($con) 
	{ 
		$firstname = $_POST['fname']; 
		$lastName = $_POST['lname']; 
		$email = $_POST['email']; 
		$password = $_POST['passwd'];
		$gender = $_POST['gender'];
		$query ="INSERT INTO websiteusers(FirstName, LastName, Email, Password, Gender) VALUES ( '$firstname','$lastName','$email','$password','$gender')";
		if ( mysqli_query($con, $query) )
		{
			echo "done";
			header ("location: LoginPage.php");
		} 
		else
		{
			echo "error";
			header ("location: Register.php");
		}
	}
?>

