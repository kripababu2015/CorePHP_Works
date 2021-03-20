<html>
  <body>
  <?php
  $nameErr="";
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } else 
  {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
		{
      $nameErr = "Only letters and white space allowed";
		}
  }
  }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  ?>
  
	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			Name<input type="text" name="name"><span class="error">* <?php echo $nameErr;?></span>
			</form>
  </body>
 </html>
  