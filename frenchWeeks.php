<?php

require_once('functions.php');

$normalWeeks = '';
$answer = '';

if( isset($_POST['submit']) ) {
  $normalWeeks = $_POST['normalWeeks'];
  $answer = frenchWeeks($normalWeeks);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Silly Frog time</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Silly Frog time</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>Weeks:</label>&nbsp;
          <input type="text" name="normalWeeks" value="<?php echo $normalWeeks; ?>" />&nbsp;
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
