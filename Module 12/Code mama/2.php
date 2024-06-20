<?php 


$line1 =fgets(STDIN);
$line2 = trim(fgets(STDIN));

$n = (int)$line1;
$data = explode(" ",$line2);
$ans = minBinarySearch($data,$n);
print $ans;


function minBinarySearch($arr,$n)
{	
	$start = 0;
	$end = $n-1;
	$lastItem = $arr[$end];
	$mid;
	while($start <=$end	)
	{
		$mid = floor(($start +$end)/2);
		if($arr[$mid]>$lastItem)
		{
			$start = $mid +1;
		}
		else
		{
			$end = $mid -1;
		}
		
	}
	if( $arr[$mid] > $lastItem)$mid++;
	return $arr[$mid];
}

