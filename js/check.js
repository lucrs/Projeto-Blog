$(document).ready(function () {

$('form').submit(function () {
    var senha = $('input[name=password]').val();
    var comSenha = $('input[name=confirm-password]').val();

    if (senha != comSenha){


        $('#error-pass').html('<p>Senhas Diferentes</p>').css("text-align","center");
        $('#error-pass').css("color","red");
        $('#error-pass').css("color","red");
        $('#error-pass').css("font-size","23px");
        $('#error-pass').css("letter-spacing","3px");
        $('input[name=password]').css("border","2px solid red");
        $('input[name=confirm-password]').css("border","2px solid red");
        $('button').css("top","0");
        return false;
    }
})

});

//,,