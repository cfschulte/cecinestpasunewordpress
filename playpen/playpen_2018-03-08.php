<?php
// playpen_template.php -  Mon Dec 11 10:15:38 CST 2017
// We might or might not use any php in here. These files will probably
// be a little heavier on javascript.

?>

<!DOCTYPE html>
<html lang="en">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Attempting drag/drop interface</title>
<link rel="stylesheet" href="/cecinestpasunewordpress/css/playpen.css">

    <script type="text/javascript" src="/cecinestpasunewordpress/jquery/jquery.js"></script>

<style>/*
#div1 {
*/
#drag_to {
    width: 700px;
    height: 15px;
    padding: 10px;
    border: 1px solid #aaaaaa;
}

.dragged {
    font-weight: bold;
}
</style>

</HEAD>
<body>

  <div class="main_text">
  <a href="/links.html">Useful links</a>&nbsp;&nbsp;&nbsp;<a href="/cecinestpasunewordpress/">home</a><br>
        
        <div class="unformatted_playpen">
        <script type="text/javascript" src="/cecinestpasunewordpress/js/drag_it.js"></script>
        <h3>Learning the drag/drop interface</h3>

<!-- 
            <span id="drag1" draggable="true" ondragstart="drag(event)">firstname </span>
            <span id="drag2" draggable="true" ondragstart="drag(event)">lastname </span>
            <span id="drag3" draggable="true" ondragstart="drag(event)">email </span>
            <span id="drag4" draggable="true" ondragstart="drag(event)">home_ddress </span>
            <span id="drag5" draggable="true" ondragstart="drag(event)">phone </span>

            <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <br>
 -->
            
            <span id="firstname" class="dragged" draggable="true" >First Name </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span id="lastname" class="dragged" draggable="true" >Last Name </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span id="email" class="dragged" draggable="true" >Email </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span id="home_address" class="dragged" draggable="true" >Home Address </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span id="phone" class="dragged" draggable="true" >Phone </span>
            <br>
            <br>

            <div id="drag_to" ></div>
            <br>
            <button id="list_items">List them</button> &nbsp;&nbsp;&nbsp;&nbsp;<button id="undo">Undo</button>
        </div>
      <br><br>
     <h3><a href="/cecinestpasunewordpress/playpen/">Archives</a></h3>
  </div>




</body>
</html>
