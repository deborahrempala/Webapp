<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="mystyle.css" type="text/css">

<head>
<title>Thank you</title>
<meta charset="utf-8">
</head>
<body>
<h1> Magical Emporium </h1>
<?php
$firsts = $_GET['first'];
$lasts = $_GET['last'];
$emails = $_GET['email'];
$genders =$_GET['gender'];
$passwords = $_GET['password'];
$lengths = $_GET['length'];

$gooddata = TRUE;

if(!$firsts)
{
$gooddata = FALSE;
$missingfields .=  " first";
}
if(!$lasts)
{
$gooddata = FAlSE;
$missingfields .=" last";
}

if(!$emails)
{
$gooddata = FALSE;
$missingfields .=  " email";
}
if(!$genders)
{
$gooddata = FALSE;
$missingfields .=  " gender";
}
if(!$passwords)
{
$gooddata = FALSE;
$missingfields .= " password ";
}

if(!$lengths)
{
$gooddata = FALSE;
$missingfields .= " length";
}

if(!$gooddata)
{
echo"<p> These fields are required: $missingfields<br>";
echo" hit back and try again</p>";
break;
}

$exists = FALSE;
$fh=fopen("customers.txt","r");
while($line = fgets($fh))
{
$line = chop($line);
$temp = explode(',', $line);
if($temp[2] == $emails)
$exists = TRUE;
}
fclose($fh);
if($exists)
{
echo"<p> user with email: $emails already exists</p>";

}
else{
$fh = fopen("customers.txt", "a");
$data =" $firsts,$lasts,$emails,$genders,$passwords,$lengths\n";
fwrite($fh,$data);
fclose($fh);


?>
Thanks for registering, <?php  echo $_GET ["$first"] ;?> , <?php echo $_GET ["$last"];?> <br>
Email:  <?php echo $_GET ["$email"]; ?>  <br>
Gender:  <?php echo $_GET ["$gender"];?> <br>
password: <?php  echo $_GET["$password"];?> <br>
Length: <?php  echo $_GET ["$length"];}?> <br>
<h2> About us </h2>
<p> We sell a variety of magical items for Students and life long learners of all ages.



</body>
</html>


