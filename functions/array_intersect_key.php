
<?php
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4, 'orange' => 5);
$array2 = array('green' => 6, 'blue' => 7, 'yellow' => 8, 'cyan'   => 9, 'banana' =>10);

var_dump(array_intersect_key($array1, $array2));
?>
