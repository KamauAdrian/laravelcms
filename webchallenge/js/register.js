$(document).ready(function () {
    $('#btn_reg').click(function () {
        var default_error_message ='Please fill  out your details';
        if ($('#user_reg').val()==0){
        alert(default_error_message)
        }

    });
$('#user_name').focusin(function () {
    $('#user_name_display').html('Enter Your user name');
});


});