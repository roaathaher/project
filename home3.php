<?php
$sum=0;
for($i=1;$i<=100;$i++){
	$sum =$sum+$i;
	if ($sum >= 100)
	{
		break;
	}
}

echo ($sum);

?>