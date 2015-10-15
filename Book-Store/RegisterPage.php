<?php
session_start();
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<style type = "text/css" >
	body 
	{
		text-align : center;
	}
	 table.center 
	{
		margin-left:auto; 
		margin-right:auto;
	}
	#sub
	{ 
		border-radius:10px; 
		width:80px; height:40px; 
		font-weight:bold; 
		font-size:20px; 
	}
</style>
<script>
	var valid = [false,false,false,false,false,false];
	function validation()
	{
		for(var i=0;i<valid.length;i++)
		{
			if(valid[i]==false)
			{
				document.getElementById("sub").disabled = true;
				return false;
			} 
		}
		document.getElementById("sub").disabled = false;
		return true;
	}
	function validFname()
	{
		var name = document.getElementById("fname").value;
		var l = /^[A-Z][^0-9]*$/;
		if ( name == null || name == "")
		{
			valid[0] = false;
			document.getElementById("msg1").innerHTML = "Not Valid";
			return validation();
		}
		if ( name.match(l) )
		{
			valid[0] = true;
			document.getElementById("msg1").innerHTML = "Valid";
			validation();
			return ;
		}
		else
		{
			valid[0] = false;
			document.getElementById("msg1").innerHTML = "Not Valid";
			return validation();
		}
	}
	function validLname()
	{
		var name = document.getElementById("lname").value;
		var l = /^[A-Z][^0-9]*$/;
		if ( name == null || name == "")
		{
			valid[1] = false;
			document.getElementById("msg3").innerHTML = "Not Valid";
			return validation();
		}
		if ( name.match(l) )
		{
			valid[1] = true;
			document.getElementById("msg3").innerHTML = "Valid";
			validation();
			return ;
		}
		else
		{
			valid[1] = false;
			document.getElementById("msg3").innerHTML = "Not Valid";
			return validation();
		}
	}
	function ValidateEmail()  
	{  
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var email = document.getElementById("email").value;
		if(email.match(mailformat))  
		{  
			valid[2] = true;
			document.getElementById("msg5").innerHTML = "Valid";
			return validation(); 
		}  
		else  
		{  
			valid[2] = false;
			document.getElementById("msg5").innerHTML = "Not Valid";
			return validation(); 
		}  
	}  
	function validpasswd()
	{
		var p = document.getElementById("passwd").value;
		if (p.length < 8) 
		{
			document.getElementById("msg2").innerHTML = "Not Valid";
			valid[3] = false;
		}
		if (p.search(/[a-z]/i) < 0) 
		{
			document.getElementById("msg2").innerHTML = "Not Valid";
			valid[3] = false;
		}
		if (p.search(/[0-9]/) < 0) 
		{
			document.getElementById("msg2").innerHTML = "Not Valid";
			valid[3] = false;
		}
		if ( p.length >=8 && p.search(/[a-z]/i) >= 0 && p.search(/[0-9]/) >= 0 )
		{
			valid[3] = true;
			document.getElementById("msg2").innerHTML = "Valid";
		}
		validation();
	}
	function validrePassword()
	{
		var pass1 = document.getElementById("passwd").value;
		var pass2 = document.getElementById("pass").value;
		var len1 = pass1.length;
		var len2 = pass2.length;
		if (pass1== pass2&&len1!=0) 
		{
			document.getElementById("msg6").innerHTML = "Valid";
			valid[4] = true;
			validation();
		}
		else
		{
			document.getElementById("msg6").innerHTML = "Not Valid";
			valid[4] = false;
			validation();
			
		}
		return validation();;
	}
	function validategender()
	{
		var genders= document.getElementsByName("gender");
		if(genders[1].checked == false && genders[0].checked == false)
		{
			alert("You must select your gender!");
			valid[5] = false;
			validation();
			return ;
		}
		valid[5] = true;
		validation();
	}
	function mouseOverpw() 
	{
		document.getElementById("msg44").innerHTML = "At least one letter, one digit and at least 8 characters!";
	}
	function mouseOutpw() 
	{
		document.getElementById("msg44").innerHTML= "";
	}
</script>
<body>
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="Company.php">Company</a></li> 
            <li><a href="Contact.php">Contact</a></li>';
			if ( !isset ($_SESSION['email']) )
			{
				echo '<li><a style="float:right" href="LoginPage.php">Login</a></li> ';
				echo '<li><a style="float:right" href="RegisterPage.php">Register</a></li>';
			}
			if (isset($_SESSION['email']))
			{
				echo '<p style="float:right">'.$_SESSION['email'].'</p>';
				echo '<li><a style="float:right" href="logout.php">Logout</a></li>';
			}
			if ( isset ($_SESSION['flag']) && $_SESSION['flag']==true  )
			{
				echo '<li><a style="float:right" href="book.php">Add Book</a></li>';
				echo '<li><a style="float:right" href="rebook.php">Remove Book</a></li>';
			}
	echo '
    	</ul>
    </div>
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        	<p>
                <span>25%</span> discounts for
        purchase over $80
        	</p>
        </div>
        <div id="templatemo_new_books">
        	<ul>';
			define('DB_HOST', 'localhost'); 
			define('DB_NAME', 'BookStore'); 
			define('DB_USER','root'); 
			define('DB_PASSWORD',''); 
			$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
			$query = "SELECT * FROM `books` WHERE 1";
			$dave= mysqli_query($con, $query);
			while($row = mysqli_fetch_assoc($dave))
				echo '<li>'.$row['Name'].'</li>';
			echo'
            </ul>            
        </div>
    </div>
    <form name = "Form1" id="Form1" action="register.php" method="post">
		<table border="0" class="center">
		<tr>
			<td>First Name</td>
			<td><input type = "text" name = "fname" id = "fname" oninput="validFname()"  title="Only Letters Allowed First Characters is Capital!" required> </td>
			<td> <span style="color : red ;font-size :12px;" id="msg1"></span></td>
		</tr>
		<tr>
			<td>Last Name</td> 
			<td> <input type = "text" name ="lname" id = "lname" oninput="validLname()" title="Only Letters Allowed First Characters is Capital!" required> </td>
			<td><span style="color : red ;font-size :12px;" id="msg3"></span></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type = "text" name ="email" id="email"  oninput="ValidateEmail()" required ></td>
			<td><span style="color : red ;font-size :12px;" id="msg5"></span></td>
		</tr>
			<td>Password</td> 
			<td><input type = "password" name = "passwd" id = "passwd"  title="At least one letter, one digit and at least 8 characters!" oninput = "validpasswd()" required></td>
			<td><span style="color : red ;font-size :12px;" id="msg2"></span></td>
		</tr>
		<tr>
			<td>Re-Password</td> 
			<td><input type ="password" name = "pass" id = "pass" oninput = "validrePassword()"required> </td>
			<td><span style="color : red ;font-size :12px;"  id="msg6"></span></td>
		</tr>
		<tr>
			<td>Date Of Birth</td>
			<td><input type = "date" ></td>
		</tr>
		<tr>
			<td><b>Gender</b></td>
					<td><input type = "radio" name = "gender" id = "gender" value = "male" onchange="validategender()" > <b>Male</b> </td>
					<td><input type = "radio" name = "gender" id = "gender" value = "female" onchange="validategender()" > <b>Female</b> </td>
		</tr>
		</table>			
			<input type="submit" value = "submit" name = "sub" id="sub" >
			<br>
		</form>
    <div id="templatemo_footer">
	       <a href="index.php">Home</a> | <a href="subpage.php">Search</a> | <a href="#">FAQs</a> | <a href="Contact.php">Contact Us</a><br />
        Copyright © 2015 <a href="#"><strong>Hos Store</strong></a> 
    </div>
</div>
</body>
</html>
';
?>