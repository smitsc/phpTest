<?php

require_once('functions.php');

$bool1 = '';
$bool2 = '';
$bool3 = '';
$bool4 = '';
$answer = '';

if( isset($_POST['submit']) ) {
	$a=$_POST['bool1'];
	$b=$_POST['bool2'];
	$c=$_POST['bool3'];
	$d=$_POST['bool4'];

	$answer = majorityGate($a,$b,$c,$d);
}

$bool_options = array(
  '1'=>"true",
  '0'=>"false"
);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Check Boolean Majority</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Check Boolean Majority</h1>
  
      <form action="" method="post">

			<div>
			  <label>Bool:</label>&nbsp;
			  <select name="bool1">
				<?php
				foreach($bool_options as $key => $value) {
				  echo "<option value=\"{$key}\"";
				  if($bool1 == $key) { echo " selected"; }
				  echo ">{$value}</option>";
				}
				?>
			  </select>
			</div>

			<div>
			  <label>Bool:</label>&nbsp;
			  <select name="bool2">
				<?php
				foreach($bool_options as $key => $value) {
				  echo "<option value=\"{$key}\"";
				  if($bool2 == $key) { echo " selected"; }
				  echo ">{$value}</option>";
				}
				?>
			  </select>
			</div>

			<div>
			  <label>Bool:</label>&nbsp;
			  <select name="bool3">
				<?php
				foreach($bool_options as $key => $value) {
				  echo "<option value=\"{$key}\"";
				  if($bool3 == $key) { echo " selected"; }
				  echo ">{$value}</option>";
				}
				?>
			  </select>
			</div>
  
			<div>
			  <label>Bool:</label>&nbsp;
			  <select name="bool4">
				<?php
				foreach($bool_options as $key => $value) {
				  echo "<option value=\"{$key}\"";
				  if($bool4 == $key) { echo " selected"; }
				  echo ">{$value}</option>";
				}
				?>
			  </select>
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
