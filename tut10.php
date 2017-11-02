<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php



//This is our test function
function test()
{
	echo "1";
	echo "2";
	echo "3";
}

//Print our name
function Printname($name)
{
	echo $name;
}

//call our function
test();

//call our other function
echo "<br>";
$myname = "Bryan Cairns";
Printname($myname);
?>

</body>
</html>
