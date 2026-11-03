<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedure Approch</title>
</head>
<body>
    <?php
        // ចង Data និង Method ចូលគ្នាក្នុង Class
        class Student {
            // Property - Data - Attribute - Data Member (ទិន្នន័យ)
            public string $name;
            public float $score;
            public string $school;
            // Method - Function - Behavior - Member Function (អាកប្បកិរិយា - កម្មវិធីបំលែងទិន្នន័យ)
            public function getDetails(): string {
                return "និស្សិត៖ {$this->name} | ពិន្ទុ៖ {$this->score} | សាលា៖ {$this->school}";
            }
            //$this គឺ Object ពិសេសសម្រាប់ក្នុង Class តែមួយ
        }

        // Create Object - Object Instance (បង្កើត Object​ ឬ Instance $st1)
        $obj = new Student();
        $obj->name = "កែវ ណារ៉ា";
        $obj->score = 92.0;
        $obj->school = "សាកលវិទ្យាល័យអង្គរ";
        echo $obj->getDetails();

        $item = new Student();
        $item->name = "សុខ សុភា";
        $item->score = 88.5;
        $item->school = "វិទ្យាល័យព្រះស៊ីសុវត្ថិ";
        echo "<br>" . $item->getDetails();   
        
        $student = new Student();
        $student->name = "ស្រី សុភី";
        $student->score = 95.0;
        $student->school = "វិទ្យាល័យព្រះស៊ីសុវត្ថិ";
        echo "<br>" . $student->getDetails();
        ?>
</body>
</html>