$(Document).ready(function () {

    $('#first_name').keyup(function () {
        var firstNameValue= $(this).val();
        if (firstNameValue.length > 8 || firstNameValue.length > 15) {
            $('#fn_error').text('First name should be between 8');
        } else {
            $('#fn_error').text('');
        }
    });

    $('#confirm_password').keyup(function () {
        var passwordValu = $(this).val();
        var confarmPasswordValu = $('#password').val();
        if (passwordValu == confarmPasswordValu) {
            $('#cm_pw_error').text('Successfull');
        } else {
            $('#cm_pw_error').text("Password and confirm password are not same");
        }
    });


    $('#registrationFrom').submit(function () {
        return true;
    });
});