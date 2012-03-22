<html>
<head>
<title>Welcome!</title>

<style type="text/css">
p1{color:red;}
p2{color:blue;}
</style>

</head>


<body>
<form action="homework_1.php" method="get">
Enter Parametar Here: <input type="text" name="value" />
<input type="submit" />
</form>

<?php
$name=$_GET["value"];

if(!is_numeric($name))
{
	?>
	<p1>The parameter is not a number.</p1>
	<br/>
	<?php
}
else {
if($name<0 or $name>19999)
{
	?>
	<p1>The parametar is not within the range [0,19999].</p1>
	<br/>
	<?php
}

function IsPrime($num)
{
	$Prime=1;
	for($i=2; $i<=$num/2; $i++)
	{
		if($num%$i==0)
			$Prime=0;
	}
	if($Prime==1)
	{
		echo "The number $num is prime!";
	}
	else
	{
		?>
		<p2>The number <?php echo $num ?> is not prime!</p2>
		<br/>
		<?php
	}
}
IsPrime($name);}
		
	
?>
</body>
</html>