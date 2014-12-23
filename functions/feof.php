
<?php
// if file can not be read or doesn't exist fopen function returns FALSE
$file = fopen("no_such_file", "w");

// FALSE from fopen will issue warning and result in infinite loop here
while (feof($file)) {
}

fclose($file);
?>
