/*************************
* drag_it.js Thu Mar  8 09:55:41 CST 2018
*
* Experimenting with the drag and drop interface.
*
**************************/


// drag from 
$(document).ready(function() {
    $(".dragged").on('dragstart', function(evt) {
//         console.log(evt.originalEvent.target);
        evt.originalEvent.dataTransfer.setData("text", evt.originalEvent.target.id);
       
    });
});

// drag to - let it
$(document).ready(function() {
    $("#drag_to").on('dragover', function(evt){
        evt.originalEvent.preventDefault();
    });
});

// drag to - accept
$(document).ready(function() {
    $("#drag_to").on('drop', function(evt){
        evt.originalEvent.preventDefault();
        var data = evt.originalEvent.dataTransfer.getData("text");
        console.log(data);
        evt.originalEvent.target.appendChild(document.getElementById(data));
    });
});


// this was originally a button to list the items in the 
// experiment

$(document).ready(function() {
    $("#list_items").on('click', function(evt){
        
        console.log($("#drag_to"));
        $("#drag_to").children().each(function(){
            console.log($(this).attr('id'));
        })
    })
});

///////
// original javascript
// function allowDrop(ev) {
//     ev.preventDefault();
// }
// 
// function drag(ev) {
//     ev.dataTransfer.setData("text", ev.target.id);
// }
// 
// function drop(ev) {
//     ev.preventDefault();
//     var data = ev.dataTransfer.getData("text");
//     ev.target.appendChild(document.getElementById(data));
// }
