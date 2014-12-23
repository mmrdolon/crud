
<?php
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Windows", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}


$var = '';

// This will evaluate to TRUE so the text will be printed.
if (isset($var)) {
    echo "This var is set so I will print.";
}
?>
