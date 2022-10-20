<html>
<head>
<title> My First Web Page </title>
<body align=center><h1>
<?php
echo " My Name is Timothy <br>";
$a = 2;
$b = 3;
$month = "November";

	if ($a==$b) echo "a is equal to b ";
	if ($month=="November") echo "It's Halloween time <br>";
	if ($a>$b) echo "a is greater than b";
	echo"<br>";
	if ($a<$b) echo "a is less than b";
	echo"<br>";
	if ($a>=$b) echo "a is greater than or equal to b";
	echo"<br>";
	if ($a<=$b) echo "a is less than or equal to b";
	echo "<br>";


$c = [1,0,1,0];
$d = [1,1,0,0];
	echo $c and $d;
		echo"<br>";
	echo $c or $d;
		echo"<br>";
	echo $c xor $d;
		echo"<br>";


$bank_balance = 120;
$savings = 100;																
if($bank_balance < 100)
	{
	$money = 1000;
	$bank_balance += $money;
	echo "<br>";
	echo "The bank balance is " .$bank_balance;
	echo "<br>";
	}
else
	{
	$savings += 50;
	$bank_balance -= 50; 
	echo "The Saving is: ".$savings. "<br>";
	echo " The bank balance is now: ". $bank_balance."<br>";
	}


$page = "Web Page";
switch($page)
{
	Case 'Home':
	{
		echo "You Choose Home";
		break;
	}
	Case 'Login':
	{
		echo "You Choose Login";
		break;
	}
	Case 'Links':
	{
		echo "You Choose Links";
		break;
	}
	default:
	{
		echo "None of the choices is correct";
	}
}
echo "<br>";


$fuel = 15;
echo $fuel<=1?"Fill Tank Now":"There's Enough Fuel";

?>
</h1>
</body>
</head>
</html>