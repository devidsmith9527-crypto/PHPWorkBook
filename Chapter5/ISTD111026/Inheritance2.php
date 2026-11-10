<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php    
        //Base Class - Parent Class - Super Class
        class myParent{
            //Properties
            protected string $myfather;
            protected string $myMother;
            //Methods
            public function setParents(string $father, string $mother){
                $this->myfather = $father;
                $this->myMother = $mother;
            }            
        }

        //Derived Class - Child Class - Sub Class
        class myChild extends myParent{
            //Properties
            protected string $myName;
            //Methods
            public function setChild(string $name){
                $this->myName = $name;
            }
            
        }

        class myGrandChild extends myChild{
            //Properties
            private string $myGrandChildName;
            //Methods
            public function setGrandChild(string $name){
                $this->myGrandChildName = $name;
            }
            public function printMyGrandChildProfile(){
                echo "--My Grand Child Profile---<br>";
                echo "My Grand Child Name is: ".$this->myGrandChildName."<br>";
                echo "My Child Name is: ".$this->myName."<br>";
                echo "My Dad is: ".$this->myfather."<br>";
                echo "My Mother is: ".$this->myMother."<br>";
                echo "----------------<br>";
            }
        }

        //Create an object of the child class
        $myGrandChild = new myGrandChild();
        //Set the values of the properties
        $myGrandChild->setGrandChild("Alice");
        $myGrandChild->setChild("John");
        $myGrandChild->setParents("Mike", "Mary");
        //Print the profile of the grand child
        $myGrandChild->printMyGrandChildProfile();
    ?>
</body>
</html>