<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home work</title>

</head>
<body>
<?php
# Lesson 8_2  page 19 task 1
function myMin($arg1, $arg2, $arg3 ){
	$minimum;
	if($arg1 < $arg2){
		$minimum = $arg1;
			if($minimum < $arg3){
				return $minimum;
			} else {
				return $arg3;
		}
	} elseif($arg1 > $arg2) {
		$minimum = $arg2;
			if($minimum < $arg3){
				return $minimum;
			} else {
				return $arg3;
		}
	} else{
		$minimum = "some wrong";
		return $minimum;
	}
}
$new_try = myMin(11 ,5, 777);
echo "your min = {$new_try}";

# br
echo "<br>";
echo "<hr>";
echo "<br>";
# Lesson 8_2  page 19 task 2
function myFactorial($num){
	if($num <= 1){
		return 1;
	} else return ($num * myFactorial($num -1));

}
$myFactor = myFactorial(4);
echo "your factorial  = {$myFactor}";
# br
echo "<br>";
echo "<hr>";
echo "<br>";
# Lesson 8_2  page 19 task 3
function myNumbers($nums){
		
	if($nums >= 0){
		echo "numbers = {$nums}";
		echo "<br>";
		myNumbers($nums - 1);

	}
}
myNumbers(5);

?>
</body>
</html>