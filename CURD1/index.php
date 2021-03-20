<html>
<body>
<h3><a href="insert_form.php">INSERT</a></h3>
<form> 
<table border='1'>
<thead>
<tr>
<th>action</th>
<th>User Id</th>
<th>User Name</th>
<th>Password</th>
<th>status</th>

</tr>
</thead>
<tbody>
<?php
$mysql=new mysqli("localhost","root","","yuva");
$res=$mysql->query("select * from yuva_ker");
    while($q=$res->fetch_assoc())
    {
    echo "<tr>
    <td><a href='delete.php?id=".$q['user_id']."'>Delete</a></td>
    <td>".$q['user_id']."</td>
    <td>".$q['user_name']."</td>
    <td>".$q['user_password']."</td>
    <td>".$q['user_status']."</td>
    <td><a href='edit.php?id=".$q['user_id']."'>Edit</a></td>
    </tr>";
    }
?>
</tbody>
</table>
</form>
</html>
</body>
