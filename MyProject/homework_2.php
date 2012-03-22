<html>
<head>
<title>Welcome!</title>
</head>

<body>
<?php
$arr=range(20,1000,37);

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
		return FALSE;
	}
	else
	{
		return TRUE;
	}
}

function find_3_prime($arr)
{ 
	$br=0;
	foreach($arr as $value)
	{
		if(!IsPrime($value))
		{
			$br++;
			if($br==3)
				{
					echo "$value <br/>";
					break;
				}
		}
	}
}

function check_exists($arr)
{
	$temp=array(148,284,871);
	foreach($temp as $i)
	{
		if(in_array($i,$arr))
			echo "The number $i exists in the array! <br/>" ;
		else
			echo "The number $i doesn't exist in the array! <br/>" ;
	}
}		

find_3_prime($arr);
check_exists($arr);
?>

</body>
</html>
	