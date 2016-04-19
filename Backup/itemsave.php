<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="mystyle.css" type="text/css">
<head>
<title>Thank you</title>
<meta charset="utf-8">
</head>
<body>
<h1>Magical Emporium </h1>
<?php

$items = $_GET['item'];
$itemnames = $_GET['itemname'];
$itemtypes = $_GET['itemtype'];
$newitems =$_GET['newitem'];
$prices = $_GET['price'];
$quanitys = $_GET['quanity'];

$gooddata = TRUE;

if(!$items)
{
$gooddata = FALSE;
$missingfields .=  " itemnumber";
}
if(!$itemnames)
{
$gooddata = FAlSE;
$missingfields .=" itemname";
}

if(!$itemtypes)
{
$gooddata = FALSE;
$missingfields .=  " itemtype";
}
if(!$newitems)
{
$gooddata = FALSE;
$missingfields .=  " newtype";
}
if(!$prices)
{
$gooddata = FALSE;
$missingfields .= " prices";
}

if(!$quanitys)
{
$gooddata = FALSE;
$missingfields .= " quantity";
}

if(!$gooddata)
{
echo"<p> These fields are required: $missingfields<br>";
echo" hit back and try again</p>";
break;
}
$exists = FALSE;
$fh=fopen("items.txt","r");
while($line = fgets($fh))
{
$line = chop($line);
$temp = explode(',', $line);
if($temp[0] == $items)
$exists = TRUE;
}
fclose($fh);
if($exists)
{
echo"<p> Item with the following number: $items already exists</p>";
}

else{
$fh = fopen("items.txt","a");
$data = "$items,$itemnames,$itemtypes,$newitems,$prices,$quanitys\n";
fwrite($fh,$data);
fclose($fh);

?>
Thank you for adding  <?php echo $_GET["itemname"]; ?><br>
Item Number: <?php echo $_GET["item"];  ?><br>
Item Type: <?php echo $_GET["itemtype"]; ?><br>
New Item? <?php echo $_GET["newitem"]; ?> <br>
Price: <?php echo $_GET["price"]; ?> <br>
Quanity: <?php echo $_GET["quanity"];} ?><br>
<h2> About us </h2>
<p> We sell a variety of magical items for Students and life long learners of all ages.

</body>
</html>

