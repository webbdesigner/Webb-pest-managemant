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

<?php include("includes/nav.php") ?>



<!-- Begin Slide Show -->
<div class="container-fluid" style="background-image:url(images/background_dark.jpg); height:100%; width:100%">
	
    <div class="container" style="background-image:url(images/WEBBlogobg_03.png); background-repeat: no-repeat; height:100%">
    		
            <div id="myCarousel" class="carousel slide">
            	<ol class="carousel-indicators">
                	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                
                <!-- Slide 1 -->
                
                	<div class="row item active">
                    	<div class="col-lg-5">
                    		<img src="images/slide_1.png" alt="No Pest Can Escape The Webb" class="img-responsive"/>
                        </div>
                        <div class="text-right col-lg-6" style="color:white;">
                        	<h1>No Pest Can Escape The Webb</h1>
                            	<p class="hide-sm">&nbsp;</p>
								<h4 style="line-height:35px;">
               						Webb Pest Management is a family owned business offering residential and commercial pest control. 
                                    Owner/operator Mike Webb has been working as a pest technician in the Goldsboro 
                                    and surrounding area for the last 30 years. Webb Pest Management uses the latest 
                                    tools and techniques to deal with...</h4>
                                <p class="hide-sm">&nbsp;</p>
                                <a href="about.php" class="btn btn-danger">LEARN MORE</a>
                        </div>
                    </div> 
                    
                    <!-- Slide 2 -->
                    
                    <div class="row item">
                    	<div class="col-lg-5">
                    		<img src="images/slide_2.png" alt="Residential" class="img-responsive"/>
                        </div>
                        <div class="text-right col-lg-6" style="color:white;">
                        	<h1>Residential Services</h1>
                        		<p class="hide-sm">&nbsp;</p>
                        		<h4 style="line-height:35px;">
                                Anyone that has ever tried to rid their home of roaches, ants, mice, or any number of other pests using “over the counter” remedies knows it can be a long and frustrating process. Many people spend hundreds of dollars on pest management unsure if a store-bought treatment will yield lasting results. Let us help!  
                                </h4>
                                <p class="hide-sm">&nbsp;</p>
                                <a href="aboutus.html" class="btn btn-danger">LEARN MORE</a>
                        </div>
                    </div>
                     
                     <!-- Slide 3 -->
                    
                    <div class="row item">
                    	<div class="col-lg-5">
                    		<img src="images/slide_3.png" alt="Commercial" class="img-responsive"/>
                        </div>
                        <div class="text-right col-lg-6" style="color:white;">
                        	<h1>Commercial Services</h1>
                        		<p class="hide-sm">&nbsp;</p>
                        		<h4 style="line-height:35px;">Your Business needs protection. Every day there are invaders attempting to penetrate your walls. Hoards of multi-legged bandits are seeking to steal the attention of your employees and your customers. These bandits could reduce profits by infesting products while undermining your company’s ability to ... </h4>
                                <p class="hide-sm">&nbsp;</p>
                                <a href="commercial.php" class="btn btn-danger">LEARN MORE</a>
                        </div>
                    </div>
                    
                    <!-- Slide 4 -->
                    
                    <div class="row item">
                    	<div class="col-lg-5">
                    		<img src="images/slide_4.png" alt="Service area" class="img-responsive"/>
                        </div>
                        <div class="text-right col-lg-6" style="color:white;">
                        	<h1>Service Area</h1>
                        	<p class="hide-sm">&nbsp;</p>	
                        		<h4 style="line-height:35px;"> Webb Pest Management operates mainly in the counties of
                     	Wayne,
                        Greene,                        
                        Duplin,
                        Lenoir,
                        Any request for services outside of this area will be decided on a per. request basis. </h4>
                      <p class="hide-sm">&nbsp;</p>
                                <a href="aboutus.html" class="btn btn-danger">LEARN MORE</a>
                        </div>
                    </div>                                   
                </div>
                
                <!-- Slide controls -->
                
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">
   		  			<span class="glyphicon glyphicon-chevron-left"></span>
   	  			</a>

				<a class="carousel-control right" href="#myCarousel" data-slide="next">
   		  			<span class="glyphicon glyphicon-chevron-right"></span>
   	  			</a>

            </div>
    </div>         
</div> <!-- ./slideshow -->
<!--Pest Section-->
<div class="container-fluid pestmap" style="background-image:url(images/WEBB_Comp_BG_04.jpg); height:408px;">
	<div class="container">
     <img src="images/WEBB_Comp_14.png" alt="Pests" width="1100px" height="408" usemap="#Map"/>
     <map name="Map">
       <area shape="poly" coords="578,136,552,154,563,180,617,185,615,156" href="#" data-toggle="modal" data-target="#flyModal">
       <area shape="poly" coords="192,192,141,196,143,230,194,232" href="#" data-toggle="modal" data-target="#antModal">
       <area class="rodents" shape="poly" coords="830,318,817,296,795,292,773,300,784,285,759,278,754,305,765,317,829,317" href="#" data-toggle="modal" data-target="#ratModal" >
       <area shape="rect" coords="325,338,396,396" href="#" data-toggle="modal" data-target="#roachModal">
     </map>
  </div>
</div>


<!-- RAT Modal -->
<div class="modal fade" id="ratModal" tabindex="-1" role="dialog" aria-labelledby="ratModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="ratModalLabel">Of Mice and Rats</h4>
      </div>
      <div class="modal-body text-center">
        <img src="images/rodents.png" alt="rat image" width="300" height="250" class="img-thumbnail" border="2"/>
        <p>Mice and rats are two different species that usually do not inhabit the same area due to the rats being larger and inherently more dominant. Rats and mice dig holes, or burrows, in which to live and breed. Each burrow can hold up to 5 rodents. These rodents can enter the home through an opening as small as ¼ inch, so it is important to close off any openings up to 3 feet off the ground. Rodents will only stick around an area if a food source is abundant and will quickly move on if food is not found. Keeping trashcan lids closed, dog food off the ground and netting over gardens are adequate ways to cut down a rodent’s food sources. Mice are more inquisitive than rats are somewhat more easily controlled, usually with a combination of mice proofing and baits. Rats are much more cautious about new items in their environment  and may require more effort to control. Let us take the guesswork out of it for you!  </p>
      </div>
      <div class="modal-footer">
      <a href="contact.php"><button type="button" class="btn btn-primary btn-lg">
      Get a Free Quote</button></a>
      </div>
    </div>
  </div>
</div>

<!-- Roach Modal -->
<div class="modal fade" id="roachModal" tabindex="-1" role="dialog" aria-labelledby="roachModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="roachModalLabel">Cockroaches</h4>
      </div>
      <div class="modal-body text-center">
        <img src="images/cockroach.png" alt="Roach image" width="300" height="250" class="img-thumbnail" border="2"/>
        <p>There are approximately half a dozen cockroach varieties that thrive in this area. Most, like the American Cockroach or “water Bug” as they are often referred  to, spend the majority of their time outside. These roaches will come inside your home however, usually looking for shelter and occasionally for food. This is when they become pests. While these insects often can't be totally eradicated, as they are entering the home from some outside source, they can be controlled.. Attention to the landscaping surrounding the structure and periodic pesticide applications are two of the ways this may be accomplished.  German roaches on the other hand  are found almost exclusively inside structures. They like the same foods we do, as well as the same temperatures. It is relatively easy to become infested with these roaches as they may be brought into the home inside of things like grocery bags and they multiply very quickly. Total eradication of these pests is really the only option for control. Eradication can usually be accomplished through a combination of pesticide applications combined with baiting and by dealing with any sanitation issues.  </p>
      </div>
      <div class="modal-footer">
      <a href="contact.php"><button type="button" class="btn btn-primary btn-lg">
      Get a Free Quote</button></a>
      </div>
    </div>
  </div>
</div>

<!-- ant Modal -->
<div class="modal fade" id="antModal" tabindex="-1" role="dialog" aria-labelledby="antModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="antModalLabel">ANTS MARCHING</h4>
      </div>
      <div class="modal-body text-center">
        <img src="images/ants.png" alt="Ant image" width="300" height="250" class="img-thumbnail" border="2"/>
        <p>Scientists estimate there are at least 1.5 million ants on the planet for every human being. The total mass of all the ants on the planet is roughly equal to the total mass of every human on earth combined. To say that they have us outnumbered would be an understatement. While there are numerous species in our area, most are content to live their lives outside in the great outdoors. Unfortunately there are a few species that like to come inside and create problems for us. Odorous house ants are probably the biggest culprit, and anyone that has ever picked up a box of cereal full of ants or, worst yet, gotten half way through a bowl of cereal before noticing that it is moving, knows the pain and aggravation these guys can cause. There are a few other species, little black ants, crazy ants, and pharaoh ants to name a few, that can be equally annoying. Fortunately there are treatment options that are very effective for controlling them. Of course there are also “outdoor” ants that can really be a problem. Fire ants are seldom home invaders, but they can really be a nuisance and even a source of potential danger out in the yard. Harvester ants are another ant species that can create all kinds of problems as they may number in the thousands. Let us help make your outdoor time a little more enjoyable and a lot less irritating.  </p>
      </div>
      <div class="modal-footer">
      <a href="contact.php"><button type="button" class="btn btn-primary btn-lg">
      Get a Free Quote</button></a>
      </div>
    </div>
  </div>
</div>

<!-- fleas Modal -->
<div class="modal fade" id="flyModal" tabindex="-1" role="dialog" aria-labelledby="flyModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content col-xs-11">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="flyModalLabel">(De)Fleaing The Scene</h4>
      </div>
      <div class="modal-body text-center">
        <img src="images/flea.jpg" alt="fly image" width="300" height="250" class="img-thumbnail" border="2"/>
        <p>Fleas are parasites that feed on humans and other warm blooded animals. When you have a flea problem you and your pets serve as the host. Most of the time, fleas prefer nonhuman source for feeding, but if infestations are heavy, or when other hosts are not available, fleas will feed on humans. Many people don't realize they have a flea problem until they are away from their house for an extended period. The flea problem is discovered when the hosts (people and pets) return. Them fleas is HUNGRY! And they will feed on anything with a blood supply. People also tend to think putting the pet outside will solve the flea problem, but that usually just makes the fleas turn to human hosts to feed. The key to flea control is breaking the life cycle. Making use of pet dips and flea treatments like “spot on” treatments combined with through vacuuming and liquid pesticide applications with both quick kill and residual (long lasting) insecticides. Also growth regulators to help kill the fleas in the egg and larval stages. Let us help you find relief from these little invaders for you and your family, both furry and not.  </p>
      </div>
      <div class="modal-footer">
      <a href="contact.php"><button type="button" class="btn btn-primary btn-lg">
      Get a Free Quote</button></a>
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
