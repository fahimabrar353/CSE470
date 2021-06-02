<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {

	text-align:center;
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>

<body>
<?php
if(isset($_POST['submit']))
{
$firstPrice=$_POST['saleprice'];
$calPrice=($firstPrice*2)/100;
$srprice=$firstPrice+$calPrice;


}
?>
<h2 align="center">Calculator</h2>
<hr />
<table id="customers">
<tr>
<th>Sale Price</th>	
<td><?php echo htmlentities($firstPrice)?></td>
</tr>

<tr>
<th>Eto-let charge</th>	
<td>2% BDT</td>
</tr>

<tr>
<th> Your Eto-let fee </th>	
<td>BDT <?php echo htmlentities($calPrice)?></td>
</tr>

<tr>
<th>Total BDT to be paid</th>	
<td>BDT <?php echo htmlentities($sprice)?>  TK</td>
</tr>


</table>
</body>
</html>