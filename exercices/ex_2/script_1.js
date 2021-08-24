$(function() {
    var test = false;

    $('img').on('click',function(){

        test = !test

        if(!test) {
            $('#content').removeClass('light');
        } else {
            $('#content').addClass('light');
        }

    });
});

