$(function(){

    $('.club').css('visibility', 'hidden');
    $('.moniteur').css('visibility', 'hidden');

    $(".checkbx").on("click", function (){

        if ($('.checkbx').is(':checked')) {

            $('.moniteur').css('visibility', 'visible');

        }else{

            $('.moniteur').css('visibility', 'hidden');

        }
    });
    $(".selec_club").change(function () {

        if ($(this).children("option:selected").val() == "autres") {

            $('.club').css('visibility', 'visible');

        } else {

            $('.club').css('visibility', 'hidden');

        }
    });
});