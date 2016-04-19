<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="mystyle.css" type="text/css">


<title>Magical Emporium </title>
</head>

<body>
<h1>Magical Emporium</h1>
<br>
<h2>Viewing items</h2>
<p>

<table>
<tr><th>Item Number</th><th>Item Name</th><th>Item Type</th><th>New Item</th><th>Price</th><th>Quantity</th><th>Purchase</th></tr>

<?php
$con = mysql_connect("localhost","drempala","dcr1114");
if(!$con)
{
die('Could not connect: '. mysql_error());
}

mysql_select_db("drempala",$con);

$result = mysql_query("SELECT * FROM items");

while($row = mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>" . $row['Item_Number'] . "</td>";
echo"<td>" . $row['Item_Name'] . "</td>";
echo"<td>" . $row['Item_Type'] . "</td>";
echo"<td>" . $row['New_Item'] . "</td>";
echo"<td>" . $row['Price'] . "</td>";
echo"<td>" . $row['Quantity'] . "</td>";
echo"<td align = \"middle\"><input type = \"button\" value=\"Purchase\"" . "onClick = \"window.location = 'buyitem.php?Item_Number=" . $row['Item_Number'] . "'\"/></td>";
echo"</tr>";
}
mysql_close($con);

?> 

<h2> About us </h2>
<p> We sell a variety of magical items for Students and life long learners of all ages.
<br>
<br>
<br>
<img src="cauldron.png" alt="cauldron" height="200" width="200">
 </body></html>
