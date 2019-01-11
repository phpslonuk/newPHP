<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home work</title>
</head>
<body>
<h1>Skillup Homeworks </h1>

<?php
# Get all data
$factorialFirst = $_POST["num1"];
$factorialSecond = $_POST["num2"];
$factorialThird = $_POST["num3"];

$factorialFourth = $_POST["num4"];

$factorialFifth = $_POST["num5"];


?>

<form action="home_work.php" method="post">
Number: <input type="text" name="num1"><br>
Number: <input type="text" name="num2"><br>
Number: <input type="text" name="num3"><br>
<input type="submit">
</form>

<?php
# Lesson 8_2 page 19 task 1 (Find the smallest number)
function myMin($arg1, $arg2, $arg3) {
  $minimum;
	if ($arg1 < $arg2) {
	  $minimum = $arg1;
		if ($minimum < $arg3) {
		  return $minimum;
	} else {
	  return $arg3;
	}
	} elseif($arg1 > $arg2) {
	  $minimum = $arg2;
		if ($minimum < $arg3) {
		  return $minimum;
		} else {
		  return $arg3;
		}
	} else {
	  $minimum = "some wrong";
	  return $minimum;
	}
}
# use function
$new_try = myMin($factorialFirst, $factorialSecond, $factorialThird);
echo "your numbers ($factorialFirst $factorialSecond $factorialThird)";
echo "<br>";
echo "min number = {$new_try}";
?>

<br>
<hr>
<br>
<form action="home_work.php" method="post">
Number: <input type="text" name="num4"><br>
<input type="submit">
</form>

<?php
# Lesson 8_2  page 19 task 2 (Find the factorial of the number)
function myFactorial($num) {
  if ($num <= 1) {
	return 1;
  } else return ($num * myFactorial($num -1));
}

# use function 
$myFactor = myFactorial($factorialFourth);
echo "number = $factorialFourth";
echo "<br>";
echo "your factorial  = {$myFactor}";
?>

<br>
<hr>
<br>
<form action="home_work.php" method="post">
Number: <input type="text" name="num5"><br>
<input type="submit">
</form>

<?php
# Lesson 8_2  page 19 task 3 (Print all numbers - 1)
function myNumbers($nums) {
  if ($nums >= 0) {
    echo "num = {$nums}";
	echo "<br>";
	myNumbers($nums - 1);
  }
}

# use function 
echo "your number = $factorialFifth";
echo "<br>";
myNumbers($factorialFifth);
?>

</body>
</html>