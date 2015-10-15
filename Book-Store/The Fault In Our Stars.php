<?php
session_start();
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Fault In Our Stars</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php">Home</a></li>
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
        purchase over $ 40
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
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Arabic Books.php">Arabic Books</a></li>
                    <li><a href="English Books.php">English Books</a></li>
                    
            	</ul>
            </div>
			
            
        </div>
        
        <div id="templatemo_content_right"> 	
            <h1>The Fault In Our Stars <span>(by John Green)</span></h1>
            <div class="image_panel"><img src="Images/The Fault In Our Stars.jpg" alt="CSS Template" width="300" height="450" /></div>
            <ul style = "margin-left :300px">
	            <li>By John Green</li>
            	<li>April 8, 2014</li>
                <li>Pages: 352</li>
                <li>ISBN 10: 0-496-91612-0 | ISBN 13: 9780492518154</li>
            </ul>
            
            <p style = "text-align:left ; margin-left : 350px ; font-size : 12px " >Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazel’s story is about to be completely rewritten.

			Insightful, bold, irreverent, and raw, The Fault in Our Stars is award-winning-author John Green’s most ambitious and heartbreaking work yet, brilliantly exploring the funny, thrilling, and tragic business of being alive and in love.</p>
            
             <div class="cleaner_with_height">&nbsp;</div>
            
            
            
        </div>
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div>
    
    <div id="templatemo_footer">
	       <a href="index.php">Home</a> | <a href="index.php">Search</a> | <a href="#">FAQs</a> | <a href="Contact.php">Contact Us</a><br />
        Copyright © 2015 <a href="#"><strong>Hos Store</strong></a> 
	</div>
</div>
</body>
</html>
'
?>