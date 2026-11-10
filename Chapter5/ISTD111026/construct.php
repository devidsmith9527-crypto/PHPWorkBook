<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
    <?php
        //Constructor: A special method that is automatically called when an object is created. It is used to initialize the object's properties.
        class circle{
            private float $radius;     
            private float $PI;       

            //Constructor method
            //construct: Automatically called when an object is created. It is used to initialize the object's properties.
            public function __construct(float $radius){
                $this->PI = 3.14159; // Initialize the PI property
                $this->radius = $radius;                
            }

            //Method to calculate area
            //Accessing by object
            public function calculateArea(): float{
                return $this->PI * pow($this->radius, 2);
            }

            //Method to display circle information
            //Accessing by object
            public function displayCircleInfo(): void{
                echo "Circle Information:<br>";
                echo "Radius: " . $this->radius . "<br>";                
                echo "Area: " . $this->calculateArea() . "<br>";
            }
        }

        //Creating an object of the circle class
        $circle1 = new circle(5.0); //Constructor is automatically called here
        $circle1->calculateArea(); //Accessing method by object
        $circle1->displayCircleInfo();//Accessing method by object
    ?>
</body>
</html>