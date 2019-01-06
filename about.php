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
            	<div class="col-lg-7" style="text-align:center; color:white;" id="text">
                	<h1>ABOUT US</h1>
                    <hr style="border: 1px solid white; width: 50%;" >
                    <h4 style="line-height: 30px;"> Webb Pest Management is a family-owned business offering residential and commercial pest control. Owner & Operator Mike Webb has been working as a pest technician in Goldsboro and surrounding areas for 30 years. Webb Pest Management uses the latest tools and techniques to deal with your pest problems, combined with timely and friendly service to guarantee an experience that will make you smile. Webb Pest Management is licensed and fully insured.
</h4>
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
