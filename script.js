
$(document).ready(function (){
    $('#registerButton').click(function (){
        $('#registerForm').toggleClass('visually-hidden');
    });
    $('#errMsgs').click(function(event){
       $('#errMsg').toggleClass('visually-hidden');
    });
});

