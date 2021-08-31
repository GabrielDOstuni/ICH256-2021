$(function() {
    $('#content').css('background-color', 'grey');
    $('h1, h2').css({
        'color': '#FF0000',
        'border-color': '#FF0000'
    });
    $('p').css('color', '#000000');
    $('h2.anecdote').css('color', '#FFFFFF');
    $('h2.anecdote + p').css('color', '#FFFFFF');
});
