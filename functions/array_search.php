
<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key1 = array_search('green', $array); // $key = 2;
$key2 = array_search('red', $array);   // $key = 1;
echo $key1;
echo $key2;
?>
