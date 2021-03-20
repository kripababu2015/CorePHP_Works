<?php
session_start();

$_SESSION['username']="kripa";
echo "session variable set".$_SESSION['username'];


if(isset($_SESSION['username']))
{
	$_SESSION['username']+=1;
}
else
{
		$_SESSION['username']=1;
}
$msg="you visited".$_SESSION['username'];
?>
<html>
<body>
<?php echo($msg);
session_destroy();?>
</body>
</html>