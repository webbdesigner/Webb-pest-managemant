<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Webb Pest Management</title>

<!-- CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php include("includes/nav.php"); ?>


<!-- page content -->
<div class="container-fluid" style="background-image:url(images/background_dark.jpg); height:100%; width:100%">
	
    <div class="container" style="background-image:url(images/WEBBlogobg_03.png); background-repeat: no-repeat; height:100%">
    		
            <div class="row">
            	<div class="col-lg-5" id="image">
                	<img src="images/slide_1.png"/>
                   
            	</div>
            	<div class="col-lg-6" style="text-align:center; color:white;" id="text">
                	<h1>GET A FREE QUOTE</h1>
                    <hr style="border: 1px solid white; width: 50%;" >
     
                         <?php
                    	function has_header_injection($str) {
                        	return preg_match( "/[\r\n]/", $str);
                    }
                    
                    if (isset ($_POST['contact_submit'])) {
                    	
						$name	=trim($_POST['name']);
						$phone	=trim($_POST['phone']);
						$sqft	=trim($_POST['sqft']);
						$type	=trim($_POST['type']);
						$msg	=$_POST['message'];
						
						if (has_header_injection($name) || has_header_injection($phone)) {
							die();
						}
						
						if ( !$name || !$phone || !$msg ) {
							echo "All fields required.";
							exit;
						}
                    
                    	$to = "webbpestmanagement@gmail.com";
					
						$subject = "Quote Request";
					
						$message  = "Name: $name\r\n";
						$message .= "Phone: $phone\r\n";
						$message .= "Type: $type\r\n";
						$message .= "Square Footage: $sqft\r\n";
						$message .= "Message:\r\n$msg";
						$message  = wordwrap($message, 72);
					
						$headers  = "MIME-Version: 1.0\r\n";
						$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
						$headers .= "From: form@webbpestmanagement.com \r\n";
						$headers .= "X-Priority: 1\r\n";
						$headers .= "X-MSMail-Priority: High\r\n\r\n";
						$from = 'form@webbpestmanagement.com';
						mail( $to, $subject, $message, $headers, $from );          
        ?>
        
        <h5>Thank You!</h5>
        
        <?php } else { ?>
     
     
     
     
     					<form method="post" action="" class="cf">
                       
  						<div class="half left cf">
                        
	    						<input type="text" id="name" placeholder="Name" name="name">
	
        						<input type="text" id="phone" placeholder="Phone Number" name="phone">
                                
                                <input type="text" id="sqft" placeholder="Approximate Square Footage" name="sqft">
                                  						
  						</div>
  	
  						<div class="half right cf">
							<input type="text" id="type" placeholder="Home or Business?" name="type">
    						<textarea name="message" type="text" id="message" placeholder="Message"></textarea>
  						</div>  
  							<input class="btn-danger" type="submit" value="Submit" id="input-submit" name="contact_submit">
                       
					</form>
     
     
     <?php } ?>
     
     
     
     
     
     
     
</div>
            	</div>
            </div>

    </div>               




<?php include("includes/footer.php"); ?>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

<!-- Pests Responsive JS plugin -->
<script>
$(document).ready(function(e) {
    $('img[usemap]').rwdImageMaps();
});
</script>

</body>
</html>
