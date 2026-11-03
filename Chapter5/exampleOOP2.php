<?php
    class Car {
        public string $brand;
        public string $color;
    }

    // Instantiation: បង្កើត Object ពីរដាច់ពីគ្នា
    $car1 = new Car();
    $car1->brand = "Toyota Prius";
    $car1->color = "White";

    $car2 = new Car();
    $car2->brand = "Lexus RX350";
    $car2->color = "Black";

    echo "រថយន្តទី១៖ {$car1->brand} ({$car1->color})<br>";
    echo "រថយន្តទី២៖ {$car2->brand} ({$car2->color})";
?>