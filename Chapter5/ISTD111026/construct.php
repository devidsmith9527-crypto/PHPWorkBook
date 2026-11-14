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
            private readonly float $PI;       

            //Constructor method
            //construct: Automatically called when an object is created. It is used to initialize the object's properties.
            public function __construct(float $PI, float $radius){
                $this->PI = $PI; 
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
        $circle1 = new circle(radius: 5.0, PI: 3.14159); //Constructor is automatically called here
        //Property PI = 3.14159, Property radius = 5.0
        $circle1->calculateArea(); //Accessing method by object
        $circle1->displayCircleInfo();//Accessing method by object
    ?>
</body>
</html>