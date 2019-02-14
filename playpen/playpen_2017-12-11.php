<?php
// playpen_template.php -  Mon Dec 11 10:15:38 CST 2017
// We might or might not use any php in here. These files will probably
// be a little heavier on javascript.

 // Origianlly from July 29, 2013 - doing this in javascript now
?>

<!DOCTYPE html>
<html lang="en">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Quick color viewer</title>
<link rel="stylesheet" href="/cecinestpasunewordpress/css/cecinestpasunewordpress.css">
<link rel="stylesheet" href="/cecinestpasunewordpress/css/playpen.css">

    <script type="text/javascript" src="/cecinestpasunewordpress/jquery/jquery.js"></script>
    

</HEAD>
<body>

  <div class="main_text">
  <a href="/links.html">Useful links</a>&nbsp;&nbsp;&nbsp;<a href="/cecinestpasunewordpress/">home</a><br>
    <div class="unformatted_playpen">
      <h1>Quick color viewer</h1>
    <script type="text/javascript" src="/cecinestpasunewordpress/js/playpen.js"></script>
  
      <div style="margin:3em;">
      <h3><?php  echo mb_convert_case("this shows colors", MB_CASE_TITLE); ?></h3>
      <form method="POST">
      Background-color: <input type="text" id="bgcolor" name="bgcolor" value="<?php echo $bgcolor; ?>" /><br><br>
      Color: <input type="text" id="fgcolor" name="fgcolor" value="<?php echo $fgcolor; ?>" /><br><br>
  
        <input type="submit" id="change_colors" value="change">
      </form>
  
      </div>
      <div style="font-size:300%; padding:1.5em;">
      This is LARGE text. 
      </div>
    </div>
      <br><br>
     <h3><a href="/cecinestpasunewordpress/playpen/">Archives</a></h3>
  </div>


</body>
</html>

<?php 
	function valid_color( $value ){
		if( ! preg_match('/^#/', $value) ) {
			$value = '#' . $value;
		}
		
		if(preg_match('/^#[a-f0-9]{6}$/i', $value)) {
			$len = strlen($value);
			
			if( $len == 7 || $len == 4 ) {
				return $value;
			} else {
			   return "#898989";
			}
		} else {
			return "#898989";
		}
	}
?>

