<html>
<body>
<?php
require('connect.php');
$id=$_GET['id'];
$result="select * from dish where id='$id'";
$res=mysqli_query($link,$result);
while($row=mysqli_fetch_assoc($res))
{
    
    ?>
    <form action="editq.php?id=<?php echo $id; ?>" method="get">
    <table>
    <tr>
    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>">
   <td>Dish Name:</td> <td><input type="text" name="dname" value=<?php echo $row['dname'];?>> </td>
   </tr>
   <tr>
   <td>price:</td> <td><input type="text" name="price" value=<?php echo $row['price'];?>> </td>
   </tr>

  <tr><td></td><td><input type="submit" name="edit" value="Edit"></td></tr>

   </form>

<?php
}
?>


