<html>
<head> <title> Let's try: Application of Looping statement </title> </head>
<body>
	
<?php

echo "Displaying integers less than 10 but not less than 3"."<br>";
echo "<br>";
for($x=1;$x<10;++$x)

{	if($x<=2)
	{
		continue;
	}
	echo" The number is: $x"." <br>";
}

?>
</body>
</html>