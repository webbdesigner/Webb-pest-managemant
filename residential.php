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
                	<img src="images/slide_2.png"/>
                   
            	</div>
            	<div class="col-lg-7" style="text-align:center; color:white;" id="text">
                	<h1>RESIDENTIAL SERVICES</h1>
                    <hr style="border: 1px solid white; width: 50%;" >
                    <h4 style="line-height: 30px;"> Anyone that has ever tried to rid their home of roaches, ants, mice, or any number of other pests using “over the counter” remedies knows it can be a long and frustrating process. Many people spend hundreds of dollars on pest management unsure if a store-bought treatment will yield lasting results. Let us help! At Webb Pest Management we have the tools, and more importantly the expertise, to take care of your pest problems. Roaches, ants, mice, fleas and other critters don't stand a chance when we're on the job!  <br>Remember, no pest can escape the Webb!
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
