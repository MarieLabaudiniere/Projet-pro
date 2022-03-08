$(function() {
    //PARTIE 3 de l'exercice
    $('#change').click(function() {
        $('#title').text("Présentation terminée");
        $('#img-hover').fadeOut("slow");
        $('#img').show();
    });

    //PARTIE 4 de l'exercice
    $('#img').click(function() {
        $('#title').text("Présentation terminée");
        $('#img-hover').slideDown("slow");
        $(this).hide();
    });
    
    //PARTIE 5 de l'exercice
    $('#img-hover').hover(function(){
        $(this).attr('width', '30%');
    },
    function(){
        $(this).attr('width', '20%');
    });
});