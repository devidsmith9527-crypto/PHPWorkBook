<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php
        //Parent Class - G1
        class MyGrandFather{
            protected string $grandFatherName;
            public function setMyGrandFatherName(string $name){
                $this->grandFatherName = $name;
            }
        }
        //Child Class - G2
        class MyFather extends MyGrandFather{
            protected string $fatherName;
            public function setMyFatherName(string $name){
                $this->fatherName = $name;
            }
        }
        //Child Class - G3
        class MyChild extends MyFather{
            private string $sonName;
            public function setMySonName(string $name){
                $this->sonName = $name;
            }
            public function getMyFamily(){
                echo "-----------------------<br>";                
                echo "GrandFather Name: ".$this->grandFatherName."<br>";
                echo "Father Name: ".$this->grandFatherName." ".$this->fatherName."<br>";
                echo "Son Name: ".$this->fatherName." ".$this->sonName."<br>";
                echo "-----------------------<br>";
            }
        }

        //Outside of the Class
        //Object Instantiation
        $myChild = new MyChild();
        $myChild->setMyGrandFatherName("Sok");
        $myChild->setMyFatherName("Sopheak");
        $myChild->setMySonName("Leakhena");
        $myChild->getMyFamily();
    ?>
</body>
</html>