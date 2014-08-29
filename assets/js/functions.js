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
    var audio = new Audio("assets/cirque_song.mp3");
    var playing = false



    $('.info').on('click','#inicio', function(e){
        e.preventDefault();

        //$('.trivia1').show();
        $(this).addClass('correcto').delay(500).queue(function(x){
            if(playing == false){
                audio.loop = true;
                audio.play();
            }
            playing = true;
            loadPregunta('trivia1');
            $(this).parent().hide();
            x();
        });

    });

    $('#again').on('click', function(e){
        e.preventDefault();
        $(this).addClass('correcto').delay(500).queue(function(z){
            $(this).parent().hide();
            reset();
            loadPregunta('trivia1');
           z();
        });

    });

    function reset(){
        error = 0;
        current_question = 0;
        next_question = 0;
        question = 0;
        answer = 0;
        c = 0;
        $('.triv').removeClass('error');
        $('.triv').removeClass('correcto');
        $('#again').removeClass('correcto');
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
        //console.log(parametros);
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
            $(this).addClass('correcto').delay(500).queue(function(x){
                if(next_question.attr('class') != 'trivia' ){
                    hidePregunta(current_question.attr('id'));
                    showResultado(calculaResultado(error),error);

                }else{
                    showPregunta(current_question.attr('id'),next_question.attr('id'));
                }
                x();

            });


        }
    });




    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
        });
        return vars;
    }

    if ('ontouchstart' in document) {
        $('body').removeClass('no-touch');
    }





});
