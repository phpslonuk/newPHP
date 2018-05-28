<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home work</title>

</head>
<body>
<?php
# Lesson 8_3  page 18 

# abstract class

abstract class Vehicle {
	private $speed;
	private $engineSize;

	public function getSpeed(){
		return $this->speed;
	}

	public function getEngineSize(){
		return $this->engineSize;
	}

	public function setSpeed($spe){
		$this->speed = $spe;

	}

	public function setEngineSize($engine){
		$this->engineSize = $engine;
	}

	public function myStart(){
		echo "I go go go ";
	}

	public function myStop(){
		echo " I stop stop stop";
	}

	public function myBreak(){
		echo "I break (((";
		
	}
	public function myShowInfo(){
		echo "This class " . get_class($this) .  ", His speed =  {$this->speed} , His engineSize =  {$this->engineSize}";
	}

}


# br
echo "<br>";
echo "<br>";

# new Car
class Car extends Vehicle{
}
# new Plane
class Plane extends Vehicle{
}
# new Boat 
class Boat extends Vehicle{

}


$myCar = new Car();
$myCar->setEngineSize("6.0L");
$myCar->setSpeed("250km");

$myPlane = new Plane();
$myPlane->setEngineSize("6000.0L");
$myPlane->setSpeed("955km");

$myBoat = new Boat();
$myBoat->setEngineSize("12.0L");
$myBoat->setSpeed("150km");



# br Car
echo "<br>";
echo "<hr>";
$myCar->myShowInfo();
# br
echo "<br>";

$myCar->myStart();
# br
echo "<br>";

$myCar->myBreak();
# br
echo "<br>";
$myCar->myStop();
echo "<br>";
echo "<hr>";


# br Plane
echo "<br>";
echo "<hr>";
$myPlane->myShowInfo();
# br
echo "<br>";

$myPlane->myStart();
# br
echo "<br>";

$myPlane->myBreak();
# br
echo "<br>";
$myPlane->myStop();
echo "<br>";
echo "<hr>";


# br Boat
echo "<br>";
echo "<hr>";
$myBoat->myShowInfo();
# br
echo "<br>";

$myBoat->myStart();
# br
echo "<br>";

$myBoat->myBreak();
# br
echo "<br>";
$myBoat->myStop();
echo "<br>";
echo "<hr>";


?>
<div>
	<img src="/img/car.jpg">
	<img src="/img/plane.jpg">
	<img src="/img/boat.jpg">
</div>
</body>
</html>