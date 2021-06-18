
<?php
$input_array = array("FirSt" => 1, "SecOnd" => 4);
echo "<pre>";
print_r(array_change_key_case($input_array, CASE_UPPER));

$a = array('roaa', 'jood', 'taym');
$b = array('thaher', 'hassan', 'hassan');
$c = array_combine($a, $b);
echo "<pre>";
print_r($c);


$coun=array(1,5,6,1,2,5,5,6);


echo "<pre>";
print_r(array_count_values($coun));












?>












