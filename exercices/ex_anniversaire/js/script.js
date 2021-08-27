$(function() {
    $('h2').on('click', function() {
        $('h3').css('visibility', 'visible');

        const audio = new Audio("./music.mp3");
        audio.play();
    });
});