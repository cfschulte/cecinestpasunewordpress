/************

/cecinestpasunewordpress/js/cecinestpasunewordpress.js - April 28, 2015
A place-holder for things we will want to do/try

*************/

$(document).ready(function() {
	$("#when_needed").hide();
});

$(document).ready(function() {
	$("#show_hide").click(function() {
		if($("#when_needed").is(":visible")){
			$("#when_needed").hide(400);
			$("#show_hide").html("Show links");
		} else {
			$("#when_needed").show(400);
			$("#show_hide").html("Hide links");
		}
	});
});


$(document).ready(function(){
//    console.log("here i am");
    $(".latest_ruminant").load("./rumination.html .unformatted");
 
// if this thing doesn't work, just put in an image
//     $(".other_content").load("./playpen.php .unformatted_playpen");
    
    // do this after other_content is loaded
//     var the_div = $(".unformatted_playpen");
//     console.log(the_div);
//     
//     var fgcolor = $(".unformatted_playpen").css('color');
//     var bgcolor = $(".unformatted_playpen").css('background-color');

//    console.log(fgcolor + ' : ' + bgcolor);
});




// Init Skrollr
var s = skrollr.init({
    forceHeight: false
});

 
// Refresh Skrollr after resizing our sections
s.refresh($('.homeSlide'));
