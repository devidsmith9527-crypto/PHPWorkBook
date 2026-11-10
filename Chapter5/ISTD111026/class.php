<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class and Objects</title>
</head>
<body>
    <?php
        //1. Define a class named "Person"
        class Person {
            // Class properties: ទិន្នន័យ
            private int $national_Id;
            private string $person_name;
            private string $address;
            private string $gender;
            private string $dateOfBirth;
            private string $placeOfBirth;
            private string $Telegram;
            // Class methods: Function, Action, Behavior, Business Logic: កម្មវិធីបំលែងទិន្នន័យ
            //Setters
            public function setNationalId(
                int $national_Id,
                string $person_name, 
                string $address, 
                string $gender, 
                string $dateOfBirth, 
                string $placeOfBirth, 
                string $Telegram
            ): void {
                $this->national_Id = $national_Id;
                $this->person_name = $person_name;
                $this->address = $address;
                $this->gender = $gender;
                $this->dateOfBirth = $dateOfBirth;
                $this->placeOfBirth = $placeOfBirth;
                $this->Telegram = $Telegram;
            }

            //Getters
            public function getNationalId(): void {
                echo "----Person Information--<br>";
                echo "National ID: " . $this->national_Id . "<br>";
                echo "Name: " . $this->person_name . "<br>";
                echo "Address: " . $this->address . "<br>";
                echo "Gender: " . $this->gender . "<br>";
                echo "Date of Birth: " . $this->dateOfBirth . "<br>";
                echo "Place of Birth: " . $this->placeOfBirth . "<br>";
                echo "Telegram: " . $this->Telegram . "<br>";
                echo "-------------------------<br>";
            }
        }

        //2. Create an object of the Person class
        //$object = new class();
        $person1 = new Person();
        $person1->setNationalId(123456789, "John Doe", "123 Main St", "Male", "1990-01-01", "Cityville", "@johndoe");
        $person1->getNationalId();

        $person2 = new Person();
        $person2->setNationalId(987654321, "Jane Smith", "456 Elm St", "Female", "1992-02-02", "Townsville", "@janesmith");
        $person2->getNationalId();
    ?>
</body>
</html>