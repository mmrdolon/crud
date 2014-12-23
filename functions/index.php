<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
      $even=0;
      $i=0;
for ($i=0;$i<=10;$i++)
{
   if(($i%2==0))
   {
       $even=$even+$i;
       echo $even;;
   }
}
//echo $even;
?>
    </body>
</html>
