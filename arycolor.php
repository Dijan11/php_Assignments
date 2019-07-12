<?php
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."<br>";



echo "<br>";
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
echo "<br>";
echo "<br>";



 $x = array(1, 2, 3, 4, 5);
 var_dump($x);
 unset($x[3]);
 $x = array_values($x);
 echo '
';
var_dump($x);



?>
