<html>
<body>
<?php
$mysql=new mysqli("localhost","root","","yuva");
$id=$_GET['id'];
$result=$mysql->query("select * from yuva_ker where user_id='$id'");
while($row=$result->fetch_assoc())
{
    
    ?>
    <form action="editq.php?id=<?php echo $id; ?>" method="get">
    <table>
    <tr>
    <?php
    echo $id;
    ?>
    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>">
   <td>User Name:</td> <td><input type="text" name="uname" value=<?php echo $row['user_name'];?>> </td>
   </tr>
   <tr>
   <td>User Password:</td> <td><input type="text" name="upass" value=<?php echo $row['user_password'];?>> </td>
   <tr><td></td><td><input type="submit" name="edit" value="Edit"></td></tr>
   </tr>
   </form>

<?php
}
?>


