<?php
$n1=24;
$n2=16;
for($i=1; $i<=$n1 && $i<=$n2; $i++)

{
	if($n1%$i==0 && $n2%$i==0)
   $hcf=$i;
}
echo $hcf;

?>