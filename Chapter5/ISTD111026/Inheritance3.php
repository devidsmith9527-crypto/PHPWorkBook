<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php    
       class myGrandParents{
            //Properties
            protected string $myGrandFather;
            protected string $myGrandMother;
            //Methods
            public function setGrandParents(string $grandFather, string $grandMother){
                $this->myGrandFather = $grandFather;
                $this->myGrandMother = $grandMother;
            }            
        }

        class myParents extends myGrandParents{
            //Properties
            protected string $myfather;
            protected string $myMother;
            //Methods
            public function setParents(string $father, string $mother){
                $this->myfather = $father;
                $this->myMother = $mother;
            }            
        }

        class myChild extends myParents{
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
                echo "My Grand Father is: ".$this->myGrandFather."<br>";
                echo "My Grand Mother is: ".$this->myGrandMother."<br>";
                echo "----------------<br>";
            }
            
        }

        //Create an object of the child class
        $myChild = new myChild();
        //Set the values of the properties
        $myChild->setChild("John");
        $myChild->setParents("Mike", "Mary");
        $myChild->setGrandParents("Tom", "Susan");
        //Print the profile of the child
        $myChild->printMyProfile();
    ?>
</body>
</html>