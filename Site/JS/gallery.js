$(document).ready(function() {
	/** Psuedo Code
	Creating a image picker that changes the z index of the Gallery_image--bigs, town_1-5
	and main_1-10.
	make it so when you click on the thmbnail it changes the Gallery-image--bigs source to the same source.
	make two arrays one for each gallery:
**/

	var thumb = $('.imagechange');
	
	var thumbsT = ['.townitem_1', '.townitem_2', '.townitem_3', '.townitem_4', '.townitem_5', ]
	
	var feature = $('img .gallery_image--big');
	
	var mainImgs = ['main_1', 'main_2', 'main_3', 'main_4', 'main_5', 'main_6', 'main_7', 'main_8', 'main_9', 'main_10'];

	// var townImgs = ['assets/images/towngallery/town_1.jpg',
	// 				'assets/images/towngallery/town_2.jpg',
	// 				'assets/images/towngallery/town_3.jpg',
	// 				'assets/images/towngallery/town_4.jpg',
	// 				'assets/images/towngallery/town_5.jpg']

// 
	var prev = $('a .gallery_control--prev');

	var next = $('a .gallery_control--next');

	var totalGalleryWidth = 0;

	// Total width is calculated by looping through each gallery item and
    // adding up each width and storing that in `totalWidth`
    $(".mainitem ").each(function(){
        totalGalleryWidth = totalGalleryWidth + $(this).outerWidth(true);
    });

    // The maxScrollPosition is the furthest point the items should
    // ever scroll to. We always want the viewport to be full of images.
    var maxScrollPosition = totalGalleryWidth - $(".gallery-wrap").outerWidth();





    //Town Gallery Function (no animation)

	thumbT.on('click', function(){
		event.preventDefault();
		changeTFeatureImg();



		function changeTFeatureImg(){
		
			feature.removeClass(thumbT);
			feature.addClass(thumbT);
		
	
			});

		});
	});



});