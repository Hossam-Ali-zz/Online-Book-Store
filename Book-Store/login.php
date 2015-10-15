<?php 
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'BookStore'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
	checkUser($con);
	function checkUser($con)
		$flag = true ;
		$email = $_POST['email']; 
		$password = $_POST['passwd'];
		$query = "SELECT Email , Password FROM websiteusers";	
		$result =  mysqli_query($con, $query);
		if ($result) 
		{
			while($row = $result->fetch_assoc()) 
			{
				if ( $row["Email"]==$email && $row["Password"]==$password )
				{
					echo "yes";
					session_start();
					$_SESSION['email'] = $email;
					if ( $email == "hossam.academya@gmail.com" && $password=="123654qwe" )
						$_SESSION['flag']= true ;
					else
						$_SESSION['flag']= false ;
					$flag = false ;
					header ("location: index.php");
					break ;
				}
			}
		} 
		if (  $flag )
		{
			header ("location: login.php");
			echo "Error";
		}
	}
?>

