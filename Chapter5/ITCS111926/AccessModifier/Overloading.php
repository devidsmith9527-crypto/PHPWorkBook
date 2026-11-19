<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overloading</title>
</head>
<body>
    <?php
        class ClassOverloading{
            private float $radius;
            private float $area;
            private float $width;
            private float $height;

            public function Shape(float $radius){
                $this->radius = $radius;
                $this->area = 3.14 * ($this->radius * $this->radius);
                echo "Area of Circle: ".$this->area."<br>";
            }

            public function Shape(float $width, float $height){
                $this->width = $width;
                $this->height = $height;
                $this->area = $this->width * $this->height;
                echo "Area of Rectangle: ".$this->area."<br>";
            }
        }

        //Outside of the Class
        //Object Instantiation
        $object = new ClassOverloading();
        $object->Shape(5.0);
        $object->Shape(5.0, 10.0);
    ?>
</body>
</html>