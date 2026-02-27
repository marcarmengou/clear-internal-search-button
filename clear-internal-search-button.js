jQuery( document ).ready( function( $ ) {
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

	// Iterate over each selector
	searchFieldsSelectors.forEach( function( selector ) {
		var $searchField = $( selector );

		if ( $searchField.length ) {
			// Wraps each search field in a div that will position the clear button
			$searchField.wrap( '<div class="search-field-wrapper"></div>' );
			var $wrapper = $searchField.parent();

			// Creates the button inside the search field, hidden by default via CSS
			var $button = $( '<button>', {
				type: 'button',
				class: 'button clear-search-button',
				'aria-label': 'Clear search field',
				text: 'X'
			} ).hide();
			$wrapper.append( $button );

			// Function to control the visibility of the button based on the content of the search field
			function toggleButtonVisibility() {
				if ( $searchField.val() ) {
					$button.show();
				} else {
					$button.hide();
				}
			}

			// Show/hide the button on the 'input' event of the search field
			$searchField.on( 'input', toggleButtonVisibility );

			// Event to clear the search field and hide the button
			$button.on( 'click', function() {
				$searchField.val( '' ).focus();
				toggleButtonVisibility(); // Ensures the button is hidden after the field is cleared
			} );

			// Initially check if it is necessary to display the button
			toggleButtonVisibility();
		}
	} );
} );
