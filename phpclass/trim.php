<?php
$str = "Hello world";
echo trim($str,"Hed");
?>
<?php
$str = "Hello\ world";
echo stripcslashes($str);
echo stripcslashes("who are\ you");
?>