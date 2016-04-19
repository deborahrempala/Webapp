<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="mystyle.css" type="text/css">


<title>Magical Emporium</title>

</head>

<body>

<h1>Delete a Item  - Administration Page</h1>

<?php
$item = $_GET['item'];
$i=0;
$fh = fopen("items.txt","r");
while ($line = fgets($fh))
 $data[$i++] = $line;
fclose($fh);

$found = FALSE;
$fh = fopen("items.txt","w");

for($j=0; $j<$i; $j++)
{
$line = chop($data[$j]);
$temp = explode(',',$line);
if ($temp[0] != $item)
fwrite($fh, $line."\n");
else
$found = TRUE;
}
fclose($fh);
if(!$found)
echo "Item was not found.";
else
echo "Item  was deleted.";

?>
<h2> About us </h2>
<p> We sell a variety of magical items for Students and life long learners of all ages.

</body>
</html>



