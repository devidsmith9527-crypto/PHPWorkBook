<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedure Approch</title>
</head>
<body>
    <?php
        // ទិន្នន័យ និង Function នៅដាច់ពីគ្នា
        $student_name = "សុខ ជា";
        $student_score = 85.5;
        $school_name = "វិទ្យាល័យព្រះស៊ីសុវត្ថិ";
        $address = "ភូមិ ១ សង្កាត់ ២ ក្រុង ៣";

        //Function Definition
        function printStudentInfo(string $name, float $score, string $school,string $address): void {
            echo "និស្សិត៖ {$name} | ពិន្ទុ៖ {$score} | សាលា៖ {$school} | អាសយដ្ឋាន៖ {$address}<br>";
        }
        // Function Call
        printStudentInfo($student_name, $student_score, $school_name, $address);
    ?>
</body>
</html>