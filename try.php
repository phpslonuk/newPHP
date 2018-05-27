<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home work</title>

</head>
<body>
<?php
# Lesson 8_2  page 55 

$descript = fopen($_SERVER['DOCUMENT_ROOT'] . '/file.txt', 'w');
if($descript !== null){
	fwrite($descript, " go go go");
	fclose($descript);
} else{
	echo "Сan not create file";
}

?>
</body>
</html>