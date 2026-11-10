<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibility Scope: Public, Private, Protected</title>
</head>
<body>
    <?php
        class Parents{
            public string $father_name;
            public string $mother_name;
            private float $loan_amount;
            protected string $house_address;

            public function __construct(float $loan_amount, string $house_address){                
                $this->loan_amount = $loan_amount;
                $this->house_address = $house_address;
            }

            public function displayParentInfo(): void{
                echo "Parent Information:<br>";
                echo "Father's Name: " . $this->father_name . "<br>";
                echo "Mother's Name: " . $this->mother_name . "<br>";
                echo "Loan Amount: " . $this->loan_amount . "<br>";
                echo "House Address: " . $this->house_address . "<br>";
            }
        }

        //create an object of the Parents class        
        $parent1 = new Parents(50000.0, "123 Main St, Cityville");
        $parent1->father_name = "John Doe"; //Accessing public property
        $parent1->mother_name = "Jane Smith"; //Accessing public property
        //$parent1->loan_amount = 60000.0; //Accessing private property (will cause an error)
        //$parent1->house_address = "456 Elm St, Townsville"; //Accessing
        $parent1->displayParentInfo(); //Displaying parent information
    ?>
</body>
</html>