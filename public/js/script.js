



$( "#cssmenu" ).menumaker( {
	format: "multitoggle",
	title: '<style="display: none;">',
} );



$( '.wrap' ).slick( {
	draggable: true,
	arrows: false,
	dots: true,
	// autoplay: true,
	fade: true,
	speed: 1000,
	autoplaySpeed: 2000,
	infinite: true,
	cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	touchThreshold: 100
} );

$( '.sg-slide' ).slick( {
	draggable: true,
	arrows: false,
	dots: false,
	// autoplay: true,
	fade: true,
	speed: 1000,
	autoplaySpeed: 2000,
	infinite: true,
	touchThreshold: 100
} );

$( document ).ready( function () {
	var acc = document.getElementsByClassName( "accordion" );
	var i;

	for ( i = 0; i < acc.length; i++ ) 
	{
		acc[ i ].addEventListener
			( "click", function () {
				this.classList.toggle( "active" );
				var panel = this.nextElementSibling;
				if ( panel.style.maxHeight ) 
				{
					panel.style.maxHeight = null;
				}
				else 
				{
					panel.style.maxHeight = panel.scrollHeight + "px";
				}
			}
			);
	}
} );