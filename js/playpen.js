/************

/cecinestpasunewordpress/js/playpen.js - Mon Dec 11 10:17:52 CST 2017
A place-holder for things we will want to do/try


-- at some point, this will contain a "Game of Life"

*************/
// for color formatter
// get the initial color and background-color  - for another
$(document).ready(function(){
    var fgcolor = $(".unformatted_playpen").css('color');
    var bgcolor = $(".unformatted_playpen").css('background-color');
    $("#bgcolor").val(bgcolor);
    $("#fgcolor").val(fgcolor);

//    console.log(fgcolor + ' : ' + bgcolor);
});


// update color and background color
$(document).ready(function(){
    $("#change_colors").click(function(event){
        var bgcolor = $("#bgcolor").val();
        var fgcolor = $("#fgcolor").val();
        
        console.log(fgcolor + ' : ' + bgcolor);
        // check to make sure that the color strings are formatted correctly
        
        $(".unformatted_playpen").css({'background-color':bgcolor});
        $(".unformatted_playpen").css({'color':fgcolor});
        
        event.preventDefault();
    });
});

