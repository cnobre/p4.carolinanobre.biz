
$('select').change(function() {

    $.ajax({
        type: 'POST',
        url: '/cruises/p_search',
        //beforeSend: function() {
           
          //  $('#results').html("Updating Cruise Table...");
        //},
        success: function(response) { 
                
            $('#results').html(response);
        },
        data: {
            //value: $(this).val(),
            //header:$(this).get(0).id, 
            chiefSci: $('#chiefSci').val(),
            dboLine: $('#dboLine').val(),
            vessel: $('#vessel').val(),
            cruiseID: $('#cruiseID').val(),
            year: $('#year').val(),
            
        },
    }); 
}); 
