// JavaScript Document

$('#contactName').blur(function(){

console.log ('contactName was finalized!');

// Figure out what the user typed in
var name = $(this).val();


//make sure field is not empty 
console.log('Check' + name);

});


$('#contactEmail').blur(function(){

console.log ('contactEmail was finalized!');

var email = $('#contactEmail').val();

//make sure field is not empty
if( !validateEmail(email)) { console.log ('invalid email!');
}
});




function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  if( !emailReg.test( $email ) ) {
    return false;
  } else {
    return true;
  }
}



