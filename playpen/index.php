<?php
// index.php -  Wed Dec 6 12:46:38 CST 2017
// 

//////////////
require_once "../includes/php_funcs.php";

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <link rel="Stylesheet" type="text/css" href="/cecinestpasunewordpress/css/cecinestpasunewordpress.css" />
  
    <script type="text/javascript" src="/cecinestpasunewordpress/jquery/jquery.js"></script>
    <script type="text/javascript" src="/cecinestpasunewordpress/js/utility.js"></script>
    
  <title>The Playground</title>
</head>
<body>

  <div class="main_text">
 <p style="margin-left:2em;"> <a href="/links.html">Useful links</a></p>
<p style="margin-left:2em;"><a href="/cecinestpasunewordpress/index.php">Back to the real thing</a></p>
  <h3>The Playground</h3>
<?php
    $contents = scandir(".");
    
    foreach($contents as $url){
        $matches;
        if(preg_match('/playpen_(.+)\.php/', $url, $matches)){
            
            $title = get_title($url);
            echo '<p><a href="' . $url . '">' . $matches[1] .'</a> <span style="padding-left:3em;">'. $title .'<span></p>'."\n";
        }
    }
?>

  </div>

</body>
</html>

