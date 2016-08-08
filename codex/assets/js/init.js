jQuery(function($) {
	
	/**
	 * Replace Menu 'a' tag if href="#" with a 'span' tag
	 */
	var attrs = { };
	
	$.each($('.menu a[href="#"]')[0].attributes, function(idx, attr) {
		attrs[attr.nodeName] = attr.nodeValue;
	});
	
	$('.menu a[href="#"]').replaceWith(function () {
		return $("<span />", attrs).append($(this).contents());
	});	


	
	/**
	 * Add animation class to sub-menu
	 */
	//$('.sub-menu').addClass( 'animated fadeIn' );	


	
	/**
	 * Init mmenu
	 */
	$("#aside").mmenu({
		"slidingSubmenus": false,
		"extensions": [
			"border-none",
			"iconbar",
			"pageshadow",
			"theme-dark",
			"widescreen"
		],
		"searchfield" : {
			"showTextItems" : true
		},
		"navbars": [
		  {
			 "position": "top",
			 "content": [
			 	"searchfield"
			 ]
		  },
		  {
			 "position": "bottom",
			 "content": [
				//"<a class='icon ion-ios-gear-outline' href='#settings' data-uk-modal></a>",
				"<a class='icon ion-ios-help-outline' href='#help' data-uk-modal></a>"
			 ]
		  }
		]
	});
	
});