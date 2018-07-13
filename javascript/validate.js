var validUsername;
var validPassword;
var validConfirm;
var validEmail;

function checkUsername(){
  var username = $('#username-field').val();
  var regex = /^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){4,18}[a-zA-Z0-9]$/;

  if (!regex.test(username)){
      $('#username-field').addClass('red-border');
      $('#existingUsername').addClass('hidden');
      $('#invalidUsername').removeClass('hidden');
      validUsername = false;
  } else {
      $('#username-field').removeClass('red-border');
      $('#invalidUsername').addClass('hidden');
      validUsername = true;
      $.ajax({
        type: "post",
        url: "includes/checkUserExistance.php",
        data: {"username": username},
        success:function(data){
          if (data == '1'){
            validUsername = false;

            $('#username-field').addClass('red-border');
            $('#existingUsername').removeClass('hidden');
            $('#invalidUsername').addClass('hidden');
          } else{
            $('#existingUsername').addClass('hidden');
          }


        }
      });


  }

}

$('#username-field').focusout(function(){
checkUsername();

});
function checkEmail(){
  var email = $('#email-field').val();
  var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  if(!regex.test(email) || email.len == 0){
    $('#email-field').addClass('red-border');
    $('#invalidEmail').removeClass('hidden');

    validEmail = false;
  } else {
    $('#email-field').removeClass('red-border');
    $('#invalidEmail').addClass('hidden');
    validEmail = true;
  }

}

$('#email-field').focusout(function(){
  checkEmail();
});


function checkPassword(){
  var password = $('#password-field').val();
  if (password.length < 8){
    $('#password-field').addClass('red-border');
    $('#invalidPassword').removeClass('hidden');
    validPassword = false;
  } else {
    $('#password-field').removeClass('red-border');
    $('#invalidPassword').addClass('hidden');
    validPassword = true;
  }
}

$('#password-field').focusout(function(){
  checkPassword();
});

function checkConfirmPassword(){

  var confirmPassword = $('#password-confirm').val();
  if (confirmPassword  != $('#password-field').val()){

    $('#password-confirm').addClass('red-border');
    $('#invalidConfirm').removeClass('hidden');
    validConfirm = false;
  }else {
    $('#password-confirm').removeClass('red-border');
    $('#invalidConfirm').addClass('hidden');
    validConfirm = true;
  }
}

$('#password-confirm').focusout(function(){
  checkConfirmPassword();
});

$('#registerForm').on("submit", function(){

  checkEmail();
  checkPassword();
  checkUsername();
  checkConfirmPassword();

  if (!validEmail || !validConfirm || !validPassword || !validUsername){
    return false;
  }

return true;

}
);
