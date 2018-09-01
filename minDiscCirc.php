<?php

require_once('functions.php');

$xPos = '';
$yPos = '';
$answer = '';

if( isset($_POST['submit']) ) {
  $xPos = $_POST['xPos'];
  $yPos = $_POST['yPos'];
  
  $answer = minDiscCirc($xPos, $yPos);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Calculate Distance</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Calculate Distance</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>X:</label>&nbsp;
          <input type="text" name="xPos" value="<?php echo $xPos; ?>" />&nbsp;
        </div>
        
        <div class="entry">
          <label>Y:</label>&nbsp;
          <input type="text" name="yPos" value="<?php echo $yPos; ?>" />&nbsp;
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <br />
	  <label><?php echo $answer ?></label>
	  <br />
      <br />	  
      <a href="index.php">Return to phpTest menu</a>
      
    </div>
  </body>
</html>
