/**
 * Created by hvaras on 27-08-14.
 */
$(function() {
    var error = 0;
    var current_question = 0;
    var question = 0;
    var next_question = 0;
    var answer = 0;
    var c = 0;
    var email ='';


    $('.info').on('click','#inicio', function(e){
        e.preventDefault();
        $(this).parent().hide();
        //$('.trivia1').show();

        loadPregunta('trivia1');
    });

    $('#again').on('click', function(e){
        e.preventDefault();
        $(this).parent().hide();
        reset();
        loadPregunta('trivia1');

    });

    function reset(){
        error = 0;
        current_question = 0;
        next_question = 0;
        question = 0;
        answer = 0;
        c = 0;
        $('.triv').removeClass('error');
    }

    function loadPregunta(q){
        $('#'+q).show();
    }

    function hidePregunta(q){
        $('#'+q).hide();
    }

    function showPregunta(c,n){

        $('#'+c).hide();
        $('#'+n).show();
    }

    function showResultado(r,e){
        console.log(r);
        c = (5-e);

        if(r)
            $('.respuesta_si').show().find('.imgr').attr('src', 'assets/img/resp'+c+'.png').attr('alt','Obtuviste '+c+' respuestas correctas');
        else
            $('.respuesta_no').show().find('.imgr').attr('src', 'assets/img/resp'+c+'.png').attr('alt','Obtuviste '+c+' respuestas correctas');
    }

    function graba_resultado(q,a){

        email = getUrlVars()["email"];

        var parametros = {
            "email" : email,
            "pregunta" : q,
            "respuesta" : a
        };
        console.log(parametros);
        if(email){
            $.ajax({
                data:  parametros,
                url:   'functions.php',
                type:  'post',
                success:  function (response) {
                    console.log('saved '+response);
                }
            });
        }


        return false;
    }



    function calculaResultado(e){
        var ret = true;
        if(e > 2)
            ret = false;
        return ret;
    }


    $('.trivia').on('click','.triv', function(e){
        e.preventDefault();
        current_question = $(this).parent();
        next_question = current_question.next();
        question = current_question.attr('id').slice(-1);
        answer = $(this).data('respuesta');

        graba_resultado(question,answer)




        if(!$(this).hasClass('ok')){

            error++;

            $(this).addClass('error').delay(500).queue(function(n){


                if(next_question.attr('class') != 'trivia' ){
                    hidePregunta(current_question.attr('id'));
                    showResultado(calculaResultado(error),error);

                }else{

                    showPregunta(current_question.attr('id'),next_question.attr('id'));
                }
                n();

            });
        }else{
            //$(this).delay(100).queue(function(){
                if(next_question.attr('class') != 'trivia' ){
                    hidePregunta(current_question.attr('id'));
                    showResultado(calculaResultado(error),error);

                }else
                    showPregunta(current_question.attr('id'),next_question.attr('id'));
            //});
        }





    });


    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
        });
        return vars;
    }



});
