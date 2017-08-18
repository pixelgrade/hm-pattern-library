(function( $ ) {

	var $fields = $( '.field input, .field textarea' )

	$fields.on( 'focus', function() {
		$( this ).closest( '.field' ).addClass( 'field-focused' )
	} );

	$fields.on( 'blur', function() {
		$( this ).closest( '.field' ).removeClass( 'field-focused' )
	} );

	$fields.on( 'input', function() {
		var val = $( this ).val();
		$( this ).closest( '.field' ).toggleClass( 'field-has-value', val )
	} );

	$( 'select' ).select2({
		theme: "pixelgrade"
	});

})( jQuery );