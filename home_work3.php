<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home work</title>

</head>
<body>
<?php
# Lesson 8_2  page 55 

# first copy file 
$content = file_get_contents('input.txt');
# echo $content;
file_put_contents($_SERVER['DOCUMENT_ROOT'].'/output.txt', $content);

# flip over text
$content1 = file_get_contents('input.txt');
echo strrev($content1);

# br
echo "<br>";
echo "<hr>";
echo "<br>";

# count the number of numbers in the text
# strlen() counts the number
# preg_replace() replaces the text

$content2 = file_get_contents('input.txt');
$count = strlen(preg_replace('/[^\d]/','',$content2));
echo "numbers in your text = {$count}";

?>
</body>
</html>