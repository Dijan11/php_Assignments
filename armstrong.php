<?php
$n=407;
$t=0;
$x=$n;
while($x!=0)
{
    $r=$x%10;
    $t=$t+$r*$r*$r;
    $x=$x/10;
}
if ($n==$t)
{
    echo "Armstrong Number";
}
else
{
    echo "Not Armstrong Number";
}
?>