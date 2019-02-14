/************

/cecinestpasunewordpress/js/first_draw.js - Thu Feb 15 14:51:25 CST 2018


-- at some point, this will contain a "Game of Life"

*************/

///////////////////////////////////
/// for canvas

// $(document).ready(function () {
//    console.log($("#first_draw"));
//     
//     var the_can = document.getElementById('first_draw');
//     console.log(the_can);
//     var context = the_can.getContext('2d');
//     context.fillStyle = "blue";
//     context.fillRect(100,100,20,20);
// });


// respond to clicks inside of the canvas.
$(document).ready(function() {
    $("#first_draw").on('click', function(event){
        console.log($(this));
        
        var canvas_width = parseInt($("#first_draw").width());
        var canvas_height = parseInt($("#first_draw").height());
        
        
        console.log('position: ' + $("#first_draw").position().top + " " + $("#first_draw").position().left);
        console.log('width: ' + canvas_width);
        console.log('height: ' + canvas_height);
        var ctx = this.getContext('2d');
        var c_width = this.width;
        var c_height = this.height;
//        console.log("c_width: " + c_width);
        
        var h_ratio = c_width/canvas_width;
        var v_ratio = c_height/canvas_height;
        
        var top = $("#first_draw").position().top ;
//         var left = $("#first_draw").position().left ; // this is really wrong!!???
        var left = this.offsetLeft ; 
        
        
        
        console.log("top: " + top + " - left: " + left);
        var x = event.clientX - left;
        var y = event.clientY - top;
//         var x = event.clientX;
//         var y = event.clientY;
        
        console.log("h_ratio: " +  h_ratio + " - v_ratio: " +  v_ratio);
        console.log("x: " +  x + " - y: " +  y);
//        console.log(ctx);
        ctx.fillStyle = "green";
        
        ctx.fillRect(x*h_ratio-1 , y*v_ratio-1, 2, 2 );
        
    });
});
