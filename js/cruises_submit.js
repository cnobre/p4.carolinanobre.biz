

$('#dbo').change(function() {

    $.ajax({
        type: 'POST',
        url: '/cruises/p_submit',
        beforeSend: function() {
            // Display a loading message while waiting for the ajax call to complete
            $('#results').html("Loading...");
        },
        success: function(response) { 
                // Load the results we get back from process.php into the results div
            $('#results').html(response);
        },
        data: {
            name: $('#name').val(),
        },
    }); // end ajax setup

}); // end process-btn wiring