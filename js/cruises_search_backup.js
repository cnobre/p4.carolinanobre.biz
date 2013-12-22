//Javascript document


$('#recipient').keyup(function() {

	// Figure out what the user typed in
	var recipient = $(this).val();
	
	// Inject the recipient into the output div on the card
	$('#recipient-output').html(recipient);
	
	// How long was the recipient?
	var length = recipient.length;
	
	// If it was 14 characters, that's the max, so inject an error message
	if(length == 14) {
		$('#recipient-error').html("Max characters: 14");
	}
	// Otherwise, we're all good, clear the error message
	else {
		$('#recipient-error').html("");
	}
	
	// Note: The "maxlength" attribute on the HTML element will prevent the user from entering more than 14 characters
	// <input type='text' id='recipient' maxlength="14"> 
	
});
