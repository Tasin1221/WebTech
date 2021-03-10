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
echo "$perimeter<br>";


$name="raju";


if (strlen($name) == strlen("mina") || strlen($name) == strlen("mithu")) {
	echo "<b>Hello</b><br>";
}else{
	echo "You are not recognized";
}
$backColor="green"; $fontColor="red"; $imageWidth="80px"; $imageHeight="80px";
?>
<img src="AIUB_logo.png" width="300px" height="300px" />
<h2>American International University -<span style="background-color:yellow;color:cyan">
Bangladesh</h2>
</span>



?>