jQuery(document).ready(function($) {
    const $searchField = $('#post-search-input');

    if($searchField.length) {
        // Usar el texto traducible para el botón
        $('<button type="button" id="clear-internal-search-button" class="button">' + clearSearchData.buttonText + '</button>').insertAfter($searchField);

        // Evento para limpiar el campo de búsqueda
        $('#clear-internal-search-button').on('click', function() {
            $searchField.val('').focus();
        });
    }
});
