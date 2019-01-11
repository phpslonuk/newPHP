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

  public function getSpeed() {
	return $this->speed;
  }

  public function getEngineSize() {
	return $this->engineSize;
  }

  public function setSpeed($spe) {
	$this->speed = $spe;
  }

  public function setEngineSize($engine) {
	$this->engineSize = $engine;
  }

  public function myStart() {
	echo "I go go go ";
  }

  public function myStop() {
	echo " I stop stop stop";
  }

  public function myBreak() {
	echo "I break (((";	
  }

  public function myShowInfo() {
	echo "This class " . get_class($this) .  ", His speed =  {$this->speed} , His engineSize =  {$this->engineSize}";
  }
}

# br
echo "<br>";
echo "<br>";
# new Object
class Car extends Vehicle{}
class Plane extends Vehicle{}
class Boat extends Vehicle{}

$myCar = new Car();
$myCar->setEngineSize("6.0L");
$myCar->setSpeed("250km");

$myPlane = new Plane();
$myPlane->setEngineSize("6000.0L");
$myPlane->setSpeed("955km");

$myBoat = new Boat();
$myBoat->setEngineSize("12.0L");
$myBoat->setSpeed("150km");
?>

<div>
<?php
# br Car
echo "<br>";
echo "<hr>";
$myCar->myShowInfo();
echo "<br>";
$myCar->myStart();
echo "<br>";
$myCar->myBreak();
echo "<br>";
$myCar->myStop();
echo "<br>";
echo "<hr>";
?>
<img src="/img/car.jpg">
</div>

<div>
<?php
# br Plane
echo "<br>";
echo "<hr>";
$myPlane->myShowInfo();
echo "<br>";
$myPlane->myStart();
echo "<br>";
$myPlane->myBreak();
echo "<br>";
$myPlane->myStop();
echo "<br>";
echo "<hr>";
?>
<img src="/img/plane.jpg">
</div>

<div>
<?php
# br Boat
echo "<br>";
echo "<hr>";
$myBoat->myShowInfo();
echo "<br>";
$myBoat->myStart();
echo "<br>";
$myBoat->myBreak();
echo "<br>";
$myBoat->myStop();
echo "<br>";
echo "<hr>";
?>
<img src="/img/boat.jpg">
</div>

</body>
</html>