<footer>
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<?php
		$pages = array();

//define pages as a 2s array
//slug => page name

//SLUG must be lower case, no spaces or punctuation.

$pages['home'] = "Legal";


$pages['barrelchasers'] = "FAQ";


$pages['lobitos'] = "Sitemap";


$pages['news'] = "Sign up for News";

$nav = createNavFromArray($pages, "footerNav");
echo $nav;

?>
		</div>
	</div>
</div>

</footer>