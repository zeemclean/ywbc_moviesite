<?php

$pages = array(
              'The Film',
              '|',
              'Barrel Chasers',
              '|',
              'Explore Lobitos',
              '|',
              'News'
              );

//var_dump($pages);

function createNavFromArray($pages){

$nav = "<nav><ul>";
    foreach($pages as $page){
    $nav.="<li>".$page."</li>";
  }



$nav .= "</ul></nav>";

return $nav;
}

      $nav = createNavFromArray($pages);
      echo $nav;
 
?>

