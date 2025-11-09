<?php
// task.php

// 1. تعریف کلاس انتزاعی Shape
abstract class Shape {
    const UNIT = "cm";

    // متد انتزاعی برای محاسبه مساحت
    abstract public function area();
}

// 2. کلاس Rectangle از Shape ارث‌بری می‌کند
class Rectangle extends Shape {
    public $width;
    public $height;

    public function construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

// 3. کلاس Circle از Shape ارث‌بری می‌کند
class Circle extends Shape {
    public $radius;

    public function construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

// 4. ایجاد اشیاء از کلاس‌ها
$rectangle = new Rectangle(5, 10);
$circle = new Circle(7);

// 5. چاپ مساحت‌ها همراه با واحد
echo "Rectangle Area: " . $rectangle->area() . " " . Shape::UNIT . "<br>";
echo "Circle Area: " . $circle->area() . " " . Shape::UNIT . "<br>";
?>

