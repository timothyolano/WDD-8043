<html>
<head>
<title>Long Quiz 2 </title>
<body>
<?php

echo "Number 1";
echo "<br>";
echo "<br>";

$salary_rate = 600/1;
$days = 15;
$salary = $salary_rate * $days;
$taxableamount = 0.3 * $salary;
$net_pay = $salary - $taxableamount;

echo "Days: $days";
echo "<br>";
echo "Salary Rate: $salary_rate";
echo "<br>";
echo "Salary: $salary";
echo "<br>";
echo "Taxable Amount: $taxableamount";
echo "<br>";
echo "Net Pay: $net_pay";


echo "<br>";
echo "<br>";
echo "Number 2";
echo "<br>";
echo "<br>";


$sum = 0;
for($x=1; $x<=50; $x++)
{

$sum +=$x;

}
echo "The sum of the numbers 1 to 50 is $sum"."\n";
?>


	
</h1>
</body>

</head>

</html>