<?php

require_once('functions.php');

$dupeArray = '';
$answer = '';

if( isset($_POST['submit']) ) {
	$array = explode(" ",trim($_POST['dupeArray']));
	$answer = firstDuplicate($array);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>first Duplicates</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>first Duplicates</h1>
  
		<label>Enter array of numbers separated by spaces:</label><br/><br/>
		
      <form action="" method="post">
        
        <div class="entry">
          <input type="text" name="dupeArray" value="<?php echo $dupeArray; ?>" size="200"/>&nbsp;
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
	  <label><?php echo $answer ?></label>
	  <br />
      <br />	  
      <a href="index.php">Return to phpTest menu</a>
      
    </div>
  </body>
</html>
