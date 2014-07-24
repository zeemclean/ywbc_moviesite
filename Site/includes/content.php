<main>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 content_box">
				<div class="row">
					<div class="col-md-12 video">
						<video width="100%" height="100%" controls>
  							<source src="assets/video/DoubleBarrelbySwitchboardMedia.mp4" type="video/mp4"></source>
						</video>
					</div>
				</div>
				<div class="row gallerytickets">
					<div class="col-md-9">
						<?php
						require('gallery.php')
						?>
					</div>
					<a href=""><button class="btn tickets"><h1 class="buttontext">Book<br>Tickets<br>Now</h1></button></a>
				</div>
				<div class="row">
					<div class="col-md-8">
						<h1 class="bigtype">Double Barrel</h1>
					</div>	
					<div class="col-md-4">
						<h3 class="releasedate">Coming November, 2014.</h3>
					</div>					
				

				<div class="row">
					<div class="col-md-6">
						
					</div>
				</div>


				</div>
				<div class="row docabout">
					<div class="col-md-8 ">
						<p>Double Barrel is a documentary film which follows Peruvian surf guide,
						 Harold Koechlin's dream of protecting Peru's world-class
						surf breaks and working with the local community to turn 
						a crumbling oil-dominated town into Peru's first truly sustainable surf town.
						</p>
					</div>
					<div class="col-md-4 credits">
						<p>Directed by Angie Takanami. Produced by Gary Parker, Chris Ashton and Angie Takanami.</p>
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