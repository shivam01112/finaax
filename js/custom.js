jQuery(document).ready(function($){
	
	"use strict";

	$('#myCollapsible').collapse({
	  toggle: false
	});

	/* 
	==================================================================
				Number Count Up(WayPoints) Script
	=================================================================	*/		
	if($('.counter').length){
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	}
	
	/* 
	==================================================================
				Date CountDown
	=================================================================	*/		
	if($(".DateCountdown").length){
		$(".DateCountdown").TimeCircles();
	}

	/* ---------------------------------------------------------------------- */
	/*	DL Responsive Menu
	/* ---------------------------------------------------------------------- */
	if(typeof($.fn.dlmenu) == 'function'){
		$('#kode-responsive-navigation').each(function(){
			$(this).find('.dl-submenu').each(function(){
				if( $(this).siblings('a').attr('href') && $(this).siblings('a').attr('href') != '#' ){
					var parent_nav = $('<li class="menu-item kode-parent-menu"></li>');
					parent_nav.append($(this).siblings('a').clone());
					
					$(this).prepend(parent_nav);
				}
			});
			$(this).dlmenu();
		});
	}

	/*
	=======================================================================
		 Pretty Photo Script
	=======================================================================
	*/
	if($("a[data-rel^='prettyPhoto']").length){
		$("a[data-rel^='prettyPhoto']").prettyPhoto();
	}
	
	/*================================================
					countdown start
	=================================================*/ 
	
	if($('.countdown').length){
		$('.countdown').downCount({ date: '08/08/2016 12:00:00', offset: +1 });
	}

	/*================================================
					bxSlider start
	=================================================*/
		
		if($('.bxslider').length){
			$(".bxslider").bxSlider({
				speed:500,
				auto: true,				
				onSlideAfter: function(){
				// $(".title").addClass("animated fadeInDown ");
				// $(".text").addClass("animated bounceInUp");
				},
				onSlideBefore: function(){
				// $(".title").removeClass("animated fadeInDown ");
				// $(".text").removeClass("animated bounceInUp");
				}
		  });
		}
		
	/*================================================
					owlCarouse2 start
	=================================================*/
		

	/*================================================
		owlCarouse2 start
	=================================================*/
		if($('.kode_brand_carousel').length){
		   var owl = $(".kode_brand_carousel");
		   owl.owlCarousel({ 
		   autoWidth:true,
			autoPlay: 3000,    //Set AutoPlay to 3 seconds
			 itemsCustom : [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 3],
			[1000, 5],
			[1200, 6],
			[1400, 6],
			[1600, 6]
			 ]
		   });
		}
	/*================================================
		bottom services start
	=================================================*/
		if($('.kode_bottom_carousel').length){
		   var owl = $(".kode_bottom_carousel");
		   owl.owlCarousel({ 
		   autoWidth:true,
			autoPlay: 3000,    //Set AutoPlay to 3 seconds
			 itemsCustom : [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 3],
			[1000, 5],
			[1200, 6],
			[1400, 6],
			[1600, 6]
			 ]
		   });
		}

	/*================================================
					owlCarouse2 start
	=================================================*/
		if($('#law_slide_img').length){
		   var owl = $("#law_slide_img");
		   owl.owlCarousel({ 
		   	autoWidth:true,
			autoPlay: 3000,    //Set AutoPlay to 3 seconds
			itemsCustom : [
			[0, 1],
			[450, 1],
			[600, 2],
			[700, 3],
			[1000, 4],
			[1200, 5],
			[1400, 5],
			[1600, 5]
			 ]
		   });
		}

	/*================================================
					owlCarouse2 start
	=================================================*/
		if($('.kode_latest_news_carousel').length){
		   var owl = $(".kode_latest_news_carousel");
		   owl.owlCarousel({
		   	loop:true,
		   	autoWidth:true,
			autoPlay: 7000,    //Set AutoPlay to 3 seconds
			itemsCustom : [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 2],
			[1000, 2],
			[1200, 3],
			[1400, 3],
			[1600, 3]
			 ]
		   });
		}

	/*================================================
					owlCarouse2 start
	=================================================*/
	if($('.kode_practise_area_wrap').length){
	   var owl = $(".kode_practise_area_wrap");
	   owl.owlCarousel({ 
		autoWidth:true,    //Set AutoPlay to 3 seconds
		itemsCustom : [
		[0, 1],
		[450, 1],
		[600, 2],
		[700, 2],
		[1000, 3],
		[1200, 4],
		[1400, 4],
		[1600, 4]
		 ],
		  navigation:true,
	   });
	}

	/*
	==============================================================
	   Progress Bar Script Start
	============================================================== */  
	if($('.progressbar').length){
	  $('.progressbar').each(function(){
			var t = $(this),
				dataperc = t.attr('data-perc'),
				barperc = Math.round(dataperc*5.56);
			t.find('.bar').animate({width:barperc}, dataperc*25);
			t.find('.label').append('<div class="perc"></div>');
			
			function perc() {
				var length = t.find('.bar').css('width'),
					perc = Math.round(parseInt(length,8)/5.56),
					labelpos = (parseInt(length,8)-2);
				t.find('.label').css('left', labelpos);
				t.find('.perc').text(perc+'%');
			}
			perc();
			setInterval(perc, 0); 
		});
	}	
	
	/*================================================
					filterable start
	=================================================*/
		
	jQuery(window).load(function($) {
		if(jQuery('#filterable-item-holder-1').length){
			var filter_container = jQuery('#filterable-item-holder-1');

			filter_container.children().css('position','relative');	
			filter_container.masonry({
				singleMode: true,
				itemSelector: '.filterable-item:not(.hide)',
				animate: true,
				animationOptions:{ duration: 800, queue: false }
			});	
			jQuery(window).resize(function(){
				var temp_width =  filter_container.children().filter(':first').width()+30;
				filter_container.masonry({
					columnWidth: temp_width,
					singleMode: true,
					itemSelector: '.filterable-item:not(.hide)',
					animate: true,
					animationOptions:{ duration: 800, queue: false }
				});		
			});	
			jQuery('ul#filterable-item-filter-1 a').on('click',function(e){	

				jQuery(this).addClass("active");
				jQuery(this).parents("li").siblings().children("a").removeClass("active");
				e.preventDefault();
				
				var select_filter = jQuery(this).attr('data-value');
				
				if( select_filter == "All" || jQuery(this).parent().index() == 0 ){		
					filter_container.children().each(function(){
						if( jQuery(this).hasClass('hide') ){
							jQuery(this).removeClass('hide');
							jQuery(this).fadeIn();
						}
					});
				}else{
					filter_container.children().not('.' + select_filter).each(function(){
						if( !jQuery(this).hasClass('hide') ){
							jQuery(this).addClass('hide');
							jQuery(this).fadeOut();
						}
					});
					filter_container.children('.' + select_filter).each(function(){
						if( jQuery(this).hasClass('hide') ){
							jQuery(this).removeClass('hide');
							jQuery(this).fadeIn();
						}
					});
				}
				
				filter_container.masonry();	
				
			});
		}
	});
	
	/*
	  =======================================================================
		  		Map Calling Script Script
	  =======================================================================
	*/
	if($('#map-canvas').length){
		google.maps.event.addDomListener(window, 'load', initialize);
	}
	
});

	
		
			

/*
  =======================================================================
			Map Style Script
  =======================================================================
*/
function initialize() {
	var MY_MAPTYPE_ID = 'custom_style';
	var map;
	var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
	var featureOpts = [
		{
		  stylers: [
			{ hue: '#f9f9f9' },			
			{ visibility: 'simplified' },
			{ gamma: 0.7 },
			{ saturation: -200 },
			{ lightness: 45 },
			{ weight: 0.6 }
		  ]
		},
		{
		featureType: "road",
		  elementType: "geometry",
		  stylers: [
			{ lightness: 200 },
			{ visibility: "simplified" }
		  ]
		},
		{
		  elementType: 'labels',
		  stylers: [		  
			{ visibility: 'on' }
		  ]
		},
		{
		  featureType: 'water',
		  stylers: [
			{ color: '#ffffff' }
		  ]
		}
	];	

	var mapOptions = {
		zoom: 15,
		scrollwheel: false,
		center: brooklyn,
		mapTypeControlOptions: {
		  mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
		},
		mapTypeId: MY_MAPTYPE_ID
	};

	map = new google.maps.Map(document.getElementById('map-canvas'),
		  mapOptions);

	var styledMapOptions = {
		name: 'Custom Style'
	};

	var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

	map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
}
