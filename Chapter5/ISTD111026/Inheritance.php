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
            private string $myName;
            //Methods
            public function setChild(string $name){
                $this->myName = $name;
            }
            public function printMyProfile(){
                echo "--My Profile---<br>";
                echo "My Name is: ".$this->myName."<br>";
                echo "My Dad is: ".$this->myfather."<br>";
                echo "My Mother is: ".$this->myMother."<br>";
                echo "----------------<br>";
            }
        }

        //Create an object of the child class
        $myChild = new myChild();
        //Set the values of the properties
        $myChild->setChild("John");
        $myChild->setParents("Mike", "Mary");
        //Print the profile of the child
        $myChild->printMyProfile();
    ?>
</body>
</html>