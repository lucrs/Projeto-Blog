$(document).ready(function () {



$('form').submit(function () {
    var senha = $('input[name=password]').val();
    var comSenha = $('input[name=confirm-password]').val();

    if (senha != comSenha){
        $('#email-error').remove('#phone-error');

        $('#error-pass').html('<p>Senhas Diferentes</p>');
        $('#error-pass').css("color","red");
        $('#error-pass').css("color","red");


        $('input[name=password]').css("border","2px solid red");
        $('input[name=confirm-password]').css("border","2px solid red");
        $('button').css("top","0");
        return false;
    }
})

});

//,,