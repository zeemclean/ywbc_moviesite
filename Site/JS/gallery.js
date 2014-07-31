$(document).ready(function() {
	/** Psuedo Code
	Creating a image picker that changes the z index of the Gallery_image--bigs, town_1-5
	and main_1-10.
	make it so when you click on the thmbnail it changes the Gallery-image--bigs source to the same source.
	make two arrays one for each gallery:
**/

	var thumb = $('.imagechange');
	
	var thumbsT = $('img .townitem');
	
	var feature = $('img .gallery_image--big');
	
	var mainImgs = ['main_1', 'main_2', 'main_3', 'main_4', 'main_5', 'main_6', 'main_7', 'main_8', 'main_9', 'main_10'];
	

	var townImgs = ['assets/images/towngallery/town_1.jpg',
					'assets/images/towngallery/town_2.jpg',
					'assets/images/towngallery/town_3.jpg',
					'assets/images/towngallery/town_4.jpg',
					'assets/images/towngallery/town_5.jpg'];
	



	thumb.on('click', function(){
		event.preventDefault();
		thumb.each(function(index){
			feature.attr('src', townImgs[index] );
		
	
			});


	});	


});