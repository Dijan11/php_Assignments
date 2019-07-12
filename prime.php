<?php
function number($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n%$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = number(4);
if ($a==0)
echo 'Not Prime Number.....'."\n";
else
echo 'Prime Number..'."\n";
?>
