<html>
<body>
<h1>User Details</h1>
<h2><a href='insert_form.php'>Insert User</a></h2>
<table border="1">
<thead>
<tr>
<th>Action</th>
<th>User id</th>
<th>User Name</th>
<th>User Password</th>
<th>User Status</th>
</tr>
</thead>
<tbody>
<?php
$mysql= new mysqli("localhost","root","","yuva");
$query=$mysql->query("select * from yuva_ker");
while($row=$query->fetch_assoc())
{
	echo "<tr>
          <td><a href='delete.php?id=$row[user_id]'>Delete</td>	
	      <td>$row[user_id]</td>
	      <td>$row[user_name]</td>
		  <td>$row[user_password]</td>
		  <td>$row[user_status]</td>
		 </tr>";

}
?>
</tbody>
</body>
</html>
