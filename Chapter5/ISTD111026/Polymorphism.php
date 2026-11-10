<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism and Method Overriding</title>
</head>
<body>
    <?php    
       //Parent Class
       class Person{
            protected string $personName;
            public function __construct(string $name)
            {
                $this->personName = $name;
            }
       }

       //At Angkor University
       class atWork extends Person{
            public function print(){
                echo "He is a teacher at Angkor University. His name is: ".$this->personName."<br>";
            }
       }

       class atHome extends Person{
            public function print(){
                echo "He is a father or husband at home. His name is: ".$this->personName."<br>";
            }
       }

       class atVillage extends Person{
            public function print(){
                echo "He is a citizen at the village. His name is: ".$this->personName."<br>";
            }
       }

       class atMarket extends Person{
            public function print(){
                echo "He is a seller at the market. His name is: ".$this->personName."<br>";
            }
       }

       //Create an object of the child class
        $atMarket = new atMarket("John");       

        //Print the profile of the child
        $atMarket->print();
        
    ?>
</body>
</html>