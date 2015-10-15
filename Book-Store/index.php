
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hos Store</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
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
        	<div class="templatemo_product_box">
            	<h1>The Fault In Our Stars  <span>(by John Green)</span></h1>
   	      <img src="Images/The Fault In Our Stars.jpg" alt="image" height="150" width="100" />
                <div class="product_info">
                	<p>John Green’s brilliant #1 bestselling novel The Fault in Our Stars </p>
					
                    <div class="buy_now_button"><a href="https://www.google.com.eg/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&ved=0CDAQFjAC&url=https%3A%2F%2Fwww.foxscreenings.com%2FTFIOS_Final_Shooting_Script.pdf&ei=YDgkVZ71GJDSaPyUgpAD&usg=AFQjCNFXFw3j4P0CGlp1F8qxm7jqoZmrsg&sig2=wZUjf9sMn0UM5mvA30Z9Qw&bvm=bv.89947451,bs.1,d.bGg" target="_blank">Download Now</a></div>
                    <div class="detail_button"><a href="The Fault In Our Stars.php">Details</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Looking For Alaska <span>(by John Green)</span></h1>
       	    <img src="Images/looking-for-alaska.jpg" alt="image" height="150" width="100" />
                <div class="product_info">
                	<p>New York Times bestseller</p>
                    <br>
                    <br>
                    <br>
                    <div class="buy_now_button"><a href="https://psv4.vk.me/c609720/u91435623/docs/fe342c065e7b/Looking_for_Alaska_John_Green.pdf?extra=jU6Sfp19SCLgNLkfh52v9ZnO1Qqs1ZWwkPa_2W0smeE7ScHmeXzSp26sjChSenEupdhY6mSY2PHUmXNELDChWBPevoWrotM&dl=1" target="_blank">Download Now</a></div>
                    <div class="detail_button"><a href="Looking For Alaska.php">Details</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>طه الغريب  <span>( By محمد صادق)</span></h1>
   	      <img src="Images/13151637.jpg" alt="image" height="150" width="100" />
                <div class="product_info">
                	<p>صوت المذيع يقول : ولأول مره على مسرح…. الفنان… طه الغريب …</p>
                  <br>
                  <br>
                    <div class="buy_now_button"><a href="http://ask4pdf.com/up/do.php?id=20" target="_blank">Download Now</a></div>
                    <div class="detail_button"><a href="Taha.php">Details</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>هيبتا <span>(by محمد صادق)</span></h1>
       	    <img src="Images/hebta.jpg" alt="image" height="150" width="100" />
                <div class="product_info">
                	<p>تأخذنا روايه  هيبتا  الى ذلك العالم الذى اهلكه الجميع بحثا .. </p>
                    <br>
                    <br>
                    <div class="buy_now_button"><a href="https://docs.google.com/uc?id=0B3AgPISTgw-bc3IzbVlVeXVmbkE&export=download" target="_blank">Download Now</a></div>
                    <div class="detail_button"><a href="Hebta.php">Details</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
        </div>
    	<div class="cleaner_with_height">&nbsp;</div>
    </div>
    
    <div id="templatemo_footer">
    
	       <a href="index.php">Home</a> | <a href="subpage.php">Search</a> | <a href="#">FAQs</a> | <a href="Contact.php">Contact Us</a><br />
        Copyright © 2015 <a href="#"><strong>Hos Store</strong></a> 
    </div> 
    
</div>
</body>
</html>

