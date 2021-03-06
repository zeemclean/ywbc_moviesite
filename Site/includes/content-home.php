<main>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 content_box">
				<div class="row">
					<div class="col-xs-12 video ">
						<video width="100%" height="100%" controls>
  							<source src="assets/video/DoubleBarrelbySwitchboardMedia.mp4" type="video/mp4"></source>
						</video>
					</div>
				</div>
				<div class="row gallerytickets">
					<div class="gallery">
						<?php
						require('gallery.php')
						?>
					</div>
					<div class="ticket_box">
						<a class="btn btn-block tickets" href="">
							<h1 class="buttontext">Book<br><span class="text--small">Tickets</span><br><span class="widespace">Now</span></h1>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1>Double Barrel</h1>
					</div>	
				</div>
				<div class="row docabout">
					<div class="col-md-8" >
						<p id="synopsis">Double Barrel is a documentary film which follows Peruvian surf guide,
						 Harold Koechlin's dream of protecting Peru's world-class
						surf breaks and working with the local community to turn 
						a crumbling oil-dominated town into Peru's first truly sustainable surf town.
						</p>
					</div>
					<div class="col-md-4 ">
						<p id="credits">Directed by Angie Takanami. Produced by Gary Parker,<br> Chris Ashton <br> and Angie Takanami.
						<br><a href="http://www.productionswitchboard.com/home.asp">A Switchboard Media production.</a></p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12 releasedate">
						<h3>In Theaters November, 2015</h3>
					</div>	
				</div>
				
					
					<?php
					
		$pages = array();

//define pages as a 2s array
//slug => page name

//SLUG must be lower case, no spaces or punctuation.

$pages['home'] = "The Film";


$pages['barrelchasers'] = "Barrel Chasers";


$pages['lobitos'] = "Explore Lobitos";


$pages['news'] = "Sign up for News";

$nav = createNavFromArray($pages, "contentNav");
echo $nav;


					?>
		
				
			</div>					


				
		</div>
	</div>
</main>