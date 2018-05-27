<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home work</title>

</head>
<body>
<?php
# Lesson 8_2  page 24 task 1

# ( echo "{$item}"; echo "<br>"; ) unnecessary

# *foreach* то є ЗЛО !!!!!!! 
function findNumber($arr, $num){
	$isNuun  = false;
	foreach ($arr as $item) {
		echo "{$item}";
		echo "<br>";
		if($item === $num){
			$isNuun = true;
			break;
		} 
	} return $isNuun;
}

$array = [2, 5, 1, 6, 9, 5, 10, 5, 5, 5];
$number = 5;
$result = findNumber($array, $number);
var_dump($result);

# br
echo "<br>";
echo "<hr>";
echo "<br>";

# Lesson 8_2  page 24 task 2

# ( echo "{$item}"; echo "<br>"; ) unnecessary

# *foreach* то є ЗЛО !!!!!!! 

function findNumberInArray($arr, $num){
	$results  = 0;
	foreach ($arr as $item) {
		echo "{$item}";
		echo "<br>";
		if($item === $num){
			$results = $results + 1;
			
		} 
	} return $results;
}

$findnum = findNumberInArray($array, $number);
echo "string + {$findnum}";

?>
</body>
</html>