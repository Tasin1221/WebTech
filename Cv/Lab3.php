<?php
echo "A quick brown <b>fox</b>  jumps over the lazy <b>dog</b> <br> ";


$mark=90;
if ($mark >= 90) {
	echo "You get A+<br>";
}elseif ($mark >80 && $mark < 90) {
	echo "You get A<br>";
}elseif ($mark > 70 && $mark < 80) {
	echo "You get B<br>";
}elseif ($mark >60 && $mark <70) {
	echo "You get C<br>";
}else {
	echo "Fail<br>";
}

$length=10;
$width=10;
if ($length == $width) {
	echo "The shape is square<br>";
}
$area = $length*$width;
echo "$area<br>";
$perimeter = 2 * ($length+$width);
echo "$perimeter";




?>