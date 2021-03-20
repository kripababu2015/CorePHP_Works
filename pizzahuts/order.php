<?php
session_start();
$link=mysqli_connect("localhost","root","","pizzahut");
?>
<html>
<body background="pc.jpg">
<form action="" method=POST>
<center>
<h1>WELCOME TO PIZZA HUT</h1>
<table>
<?php
    
    $id=$_SESSION["id"];
    
    $sqq="select * from register where loginid = $id";
    $re=mysqli_query($link,$sqq);
    while($ro=mysqli_fetch_array($re))
    {
?>
<tr><td><h3>NAME</h3></td><td><input type="text"
name="name" value="<?php echo $ro['name'];?>"></td></tr>
 <tr><td><h3>ADDRESS</h3></td><td><textarea name="address">
<?php echo $ro['address'];  ?></textarea></td></tr>



<?php
    }  
    
$did=$_GET['id'];
$sq="SELECT * from dish where id = '$did'";
    $ress=mysqli_query($link,$sq);
    while($roww=mysqli_fetch_array($ress))
    {

    

    

?>
<tr><td><h3>DISH NAME</h3></td><td><input type="text"
name="dname" value="<?php echo $roww['dname'];}?>"></td></tr>
<tr><td><h3>ORDER TYPE</h3></td><td><input type="radio"
name="ordertype" value="Home"><b>Home delivary</b></td>
<td><input type="radio" name="ordertype" value="Take"><b>Take away</b></td>
</tr>
<tr><td><h3>Size</h3></td><td><select name=pizzasize>
<option>small</option>
<option>medium</option>
<option>large</option>
</select></td>
</tr>
<tr><td><h3>TOPPINGS</h3></td><td><input type="checkbox"
name=c1 value="c1">Pepper</td></tr>
<tr><td></td><td><input type="checkbox" name=c2 value="c2">Chillisaus</td></tr>
<tr><td></td><td><input type="checkbox" name=c3 value="c3">Sweetcorn</td></tr>
<tr><tr><td></td><td><input type="submit" value="OK" name="btnsubmit"></td></tr>
</table>
</center>
</form>
<?php
    
$pep=0;
$chil=0;
$sp=0;
$hamt=0;
$tamt=0;
$samt=0;
$mamt=0;
$lamt=0;
$pamt=0;
$camt=0;
$coamt=0;
$bill=0;

if(isset($_POST["c1"]))
{
$pep=1;
}
else
{
$pep=0;
}
if(isset($_POST["c2"]))
{
$chil=1;
}
else
{
$chil=0;
}
if(isset($_POST["c3"]))
{
$sp=1;
}
else
{
$sp=0;
}
if(isset($_POST['btnsubmit']))
{

$msql="insert into orderdish(name,address,dish,ordertype,pizzasize,pepper,chilli,sweetcorn)
values('$_POST[name]','$_POST[address]','$_POST[dname]','$_POST[ordertype]','$_POST[pizzasize]','$pep','$chil','$sp')";
mysqli_query($link,$msql);
$msql1="select * from price";
$mres=mysqli_query($link,$msql1);
while($row=mysqli_fetch_array($mres))
{
$hamt=$row['home'];
$tamt=$row['take'];
$samt=$row['small'];
$mamt=$row['medium'];
$lamt=$row['large'];
$pamt=$row['pepper'];
$camt=$row['chilly'];
$coamt=$row['corn'];



$sql2="select * from dish where id='$did'";
$res2=mysqli_query($link,$sql2);
while($row2=mysqli_fetch_array($res2))
{
    $price=$row2['price'];
}
$bill=$price;


if($_POST['ordertype']=="Home")
{
$bill=$bill+$hamt;

}
if($_POST['ordertype']=="Take")
{
$bill=$bill+$tamt;

}
if($_POST['pizzasize']=="small")
{
$bill=$bill+$samt;

}
if($_POST['pizzasize']=="medium")
{
$bill=$bill+$mamt;
}
if($_POST['pizzasize']=="large")
{
$bill=$bill+$lamt;
}
if($pep==1)
{
$bill=$bill+$pamt;
}
if($chil==1)
{
$bill=$bill+$camt;
}
if($sp==1)
{
$bill=$bill+$coamt;
}
echo "<center>";
echo "<table bgcolor=white border=1>";
echo "<tr>";
echo "<th>HOME</th>";
echo "<th>TAKE AWAY</th>";
echo "<th>SMALL</th>";
echo "<th>MEDIUM</th>";
echo "<th>LARGE</th>";
echo "<th>PEPPER</th>";
echo "<th>CHILLY</th>";
echo "<th>SWEET CORN</th>";
echo "</tr>";
echo "<tr>";
echo "<td>$hamt</td>";
echo "<td>$tamt</td>";
echo "<td>$samt</td>";
echo "<td>$mamt</td>";
echo "<td>$lamt</td>";
echo "<td>$pamt</td>";
echo "<td>$camt</td>";
echo " <td>$coamt</td>";
echo "</tr>";
echo "</table>";
echo "</center>";


echo "<center>";
echo "<h3>YOUR BILL IS....</h3>";
echo "<table bgcolor=white border=1>";
echo "<tr><th> Name</th><th> Address</th><th>Order type</th><th> Size</th><th>Pepper</th><th>Chili</th><th>Sweet Corn</th></th><th>Amount</th><th>Total</th></tr>";
echo "<tr><td>$_POST[name]</td>";
echo "<td>$_POST[address]</td>";
echo "<td>$_POST[ordertype]</td>";
echo "<td>$_POST[pizzasize]</td>";
// echo "<td>TOPPINGS</td>";
echo "<td>$pep</td>";
echo "<td>$chil</td>";
 echo "<td>$sp</td>";
 echo "<td></td>";
echo "<td>$bill</td></tr>";
echo "</table>";
echo "</center>";
}
}
?>
</body>
</html>