<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="mystyle.css" type="text/css">


<title>Magical Emporium </title>

</head>

<body>

<h1>Search for a customer  - Administration Page</h1>
<?php
$email = $_GET['email'];
$fh = fopen("customers.txt", "r");
$found = FALSE;
while($line = fgets($fh))
{
$line = chop($line);
$temp = explode(',', $line);
if($temp[2] == $email)
{
$found = TRUE;
echo "First name: $temp[0] Last name: $temp[1] Email: $temp[2]<br>" .
     "Gender: $temp[3] Password: $temp[4] Arm Length: $temp[5]<br />\n";
}
}
fclose($fh);
if(!$found)
echo "Customer was not found";

?>
</body>
</html>
