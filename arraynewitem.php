<?php
$original = array( '1','2','3','4','5' );
echo 'Original array : '." ";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo "<br>";
echo "  After inserting '$' the array is: ";
foreach ($original as $x) 
{
	echo "$x ";
}
echo "<br>"
?>
