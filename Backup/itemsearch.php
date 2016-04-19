<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="mystyle.css" type="text/css">


<title>Search for a Item </title>

</head>

<body>

<h1>Search for a item  - Administration Page</h1>
<?php
$item = $_GET['item'];
$fh = fopen("items.txt", "r");
$found = FALSE;
while($line = fgets($fh))
{
$line = chop($line);
$temp = explode(',', $line);
if($temp[0] == $item)
{
$found = TRUE;
echo "Item number: $temp[0] Item name: $temp[1] Item Type: $temp[2]<br>" .
     "New Item: $temp[3] Price: $temp[4] Quanity: $temp[5]<br />\n";
}
}
fclose($fh);
if(!$found)
echo "Item was not found";

?>
<h2> About us </h2>
<p> We sell a variety of magical items for Students and life long learners of all ages.
</body>
</html>

