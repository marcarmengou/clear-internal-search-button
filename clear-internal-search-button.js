jQuery(document).ready(function($) {
    // Define a list of selectors for the search fields
    const searchFieldsSelectors = ['#post-search-input', '#comment-search-input', '#user-search-input'];

    // Iterate over each selector
    searchFieldsSelectors.forEach(function(selector) {
        const $searchField = $(selector);

        if($searchField.length) {
            // Creates the button but initially hidden
            const $button = $('<button type="button" class="button clear-search-button" style="display: none;">' + clearSearchData.buttonText + '</button>').insertAfter($searchField);

            // Function to control the visibility of the button based on the content of the search field
            function toggleButtonVisibility() {
                if ($searchField.val()) {
                    $button.show();
                } else {
                    $button.hide();
                }
            }

            // Show/hide the button in the 'input' event of the search field
            $searchField.on('input', toggleButtonVisibility);

            // Event to clear the search field and hide the button
            $button.on('click', function() {
                $searchField.val('').focus();
                toggleButtonVisibility(); // Ensures that the button is hidden after the field is cleared
            });

            // Initially check if it is necessary to display the button
            toggleButtonVisibility();
        }
    });
});
