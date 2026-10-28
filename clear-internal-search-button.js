jQuery( function( $ ) {
	// Define a list of selectors for the search fields
	var searchFieldsSelectors = [
		'#post-search-input',
		'#comment-search-input',
		'#user-search-input',
		'#media-search-input',
		'#plugin-search-input',
		'#wp-filter-search-input',
		'#search-plugins',
		'#tag-search-input'
	];

	// Strings translated in PHP, with English fallbacks
	var clearLabel = ( typeof cisbData !== 'undefined' && cisbData.clearLabel ) ? cisbData.clearLabel : 'Clear search field';
	var clearedMessage = ( typeof cisbData !== 'undefined' && cisbData.clearedMessage ) ? cisbData.clearedMessage : 'Search field cleared.';

	// Iterate over each selector
	searchFieldsSelectors.forEach( function( selector ) {
		var $searchField = $( selector );

		if ( $searchField.length ) {
			// Wraps each search field in a div that will position the clear button
			$searchField.wrap( '<div class="search-field-wrapper"></div>' );

			// Creates the button inside the search field, hidden by default via CSS
			var $button = $( '<button>', {
				type: 'button',
				class: 'button clear-search-button',
				'aria-label': clearLabel,
				title: clearLabel,
				text: 'X'
			} );
			$searchField.parent().append( $button );

			// Show the button only when the search field has content
			$searchField.on( 'input', function() {
				$button.toggle( '' !== $searchField.val() );
			} );

			// Clear the search field, hide the button, return focus to the field and tell screen readers
			$button.on( 'click', function() {
				$searchField.val( '' ).trigger( 'focus' );
				$button.hide();

				if ( window.wp && wp.a11y && wp.a11y.speak ) {
					wp.a11y.speak( clearedMessage );
				}
			} );

			// Initially check if it is necessary to display the button
			$button.toggle( '' !== $searchField.val() );
		}
	} );
} );
