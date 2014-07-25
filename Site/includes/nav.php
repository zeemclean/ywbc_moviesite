
<?php


$pages = array();

//define pages as a 2s array
//slug => page name

//SLUG must be lower case, no spaces or punctuation.

$pages['home'] = "The Film";


$pages['barrelchasers'] = "Barrel Chasers";


$pages['lobitos'] = "Explore Lobitos";


$pages['signup'] = "Sign up for News";


//Make a function that creates a nav from an array
function createNavFromArray($pages, $class = ""){

//Creating html for nav
$nav = "\n<nav class='".$class."'><ul>";
    
//Creating list items
    foreach($pages as $slug => $pageName)
    {
    	$class = "inactive";

    	if($_GET['page'] == $slug)
    	{
    		$class = "active";
    	}



    $nav.="\n\t<li class='".$class."'><a href='index.php?page=".$slug."'>".$pageName."</a></li>";
  }


//close html string for nav
$nav .= "\n</ul></nav>";

return $nav;
}

$nav = createNavFromArray($pages, "headerNav");
echo $nav;
 
?>