<html>
<body>
<?php
require('connect.php');
$id=$_GET['id'];
$result="select * from student where slno='$id'";
$res=mysqli_query($link,$result);
while($row=mysqli_fetch_assoc($res))
{
    
    ?>
    <form action="editq.php?id=<?php echo $id; ?>" method="get">
    <table>
    <tr>
    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>">
   <td>Student Name:</td> <td><input type="text" name="sname" value=<?php echo $row['name'];?>> </td>
   </tr>
   <tr>
   <td>Roll no:</td> <td><input type="text" name="srno" value=<?php echo $row['rollno'];?>> </td>
   </tr>
   <tr>
   <td>Address:</td> <td><textarea name="saddress"><?php echo $row['address'];?></textarea></td>
   </tr>
   <tr>
   <td>Email:</td> <td><input type="email" name="email" value=<?php echo $row['email'];?>> </td>
   </tr>
  <tr><td></td><td><input type="submit" name="edit" value="Edit"></td></tr>

   </form>

<?php
}
?>


