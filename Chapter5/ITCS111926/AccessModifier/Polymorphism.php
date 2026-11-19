<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism - Polymorphic Methods - Method Overriding</title>
</head>
<body>
    <?php
        //Base Class - Parent Class
        class Person{
            //Properties - Attributes - Fields - Data Members
            protected string $fullName;
            

            //Methods - Functions - Behaviors - Actions - Business Logic - Operations
            public function setFullName(string $fullName){
                $this->fullName = $fullName;
            }            
        }

        class AtCompany extends Person{
            public function Print(){
                echo "Full Name: ".$this->fullName." is a staff of the company.<br>";
            }            
        }

        class AtHome extends Person{
            public function Print(){
                echo "Full Name: ".$this->fullName." is a family member.<br>";
            }            
        }

        class AtSchool extends Person{
            public function Print(){
                echo "Full Name: ".$this->fullName." is a teacher of the school.<br>";
            }            
        }

        class AtVillage extends Person{
            public function Print(){
                echo "Full Name: ".$this->fullName." is a villager.<br>";
            }            
        }

        //Outside of the Class
        //Object Instantiation
        $object1 = new AtCompany();
        $object1->setFullName("Sok Sopheak");
        $object1->Print();

        $object2 = new AtHome();
        $object2->setFullName("Sok Sopheak");
        $object2->Print();

        $object3 = new AtSchool();
        $object3->setFullName("Sok Sopheak");
        $object3->Print();

        $object4 = new AtVillage();
        $object4->setFullName("Sok Sopheak");
        $object4->Print();
    ?>
</body>
</html>