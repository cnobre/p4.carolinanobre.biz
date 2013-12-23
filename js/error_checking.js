// JavaScript Document

$('#contactName').blur(function () {


    // Figure out what the user typed in
    var name = $(this).val();

    if (name.trim().length == 0) {
        $('#name_error').css('display', 'inline');
        $('#name_error').html('Please input a Contact Name.');
    } else {
        $('#name_error').css('display', 'none');
    }


});


$('#contactEmail').blur(function () {

    console.log('contactEmail was finalized!');

    var email = $('#contactEmail').val();

    //make sure field is not empty
    if (email.trim().length == 0) {
        $('#email_error').css('display', 'inline');
        $('#email_error').html('Please input an email.');
    } else {
        $('#email_error').css('display', 'none');
    }

    //make sure email is valid
    if (!validateEmail(email)) {

        $('#email_error').css('display', 'inline');
        $('#email_error').html('Invalid Email format!');
    } else {
        $('#email_error').css('display', 'none');
    };
});


function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test($email)) {
        return false;
    } else {
        return true;
    }
}

$('#cruiseID').blur(function () {


    // Figure out what the user typed in
    var name = $(this).val();

    if (name.trim().length == 0) {
        console.log('found it');
        $('#criuseID_error').css('display', 'inline');
        $('#cruiseID_error').html('Please input a Cruise ID.');
    } else {
        $('#cruiseID_error').css('display', 'none');
    }


});

$('#chiefSci').blur(function () {


    // Figure out what the user typed in
    var name = $(this).val();

    if (name.trim().length == 0) {
        $('#chiefSci_error').css('display', 'inline');
        $('#chiefSci_error').html('Please input Chief Scientist for the cruise.');
    } else {
        $('#chiefSci_error').css('display', 'none');
    }


});

$('#vessel').blur(function () {


    // Figure out what the user typed in
    var name = $(this).val();

    if (name.trim().length == 0) {
        $('#vessel_error').css('display', 'inline');
        $('#vessel_error').html('Please input a Contact Name!');
    } else {
        $('#vessel_error').css('display', 'none');
    }


});