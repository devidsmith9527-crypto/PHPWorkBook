<?php
    class Faculty{
        //1. Properties Declaration(ប្រកាស Properties​​ - ទិន្នន័យ)
        private int $facultyId;
        private string $facultyName;
        private string $facultyDepartment;

        //2. Function(Method) Definition(ការកំណត់មុខងារ)
        public function setFaculty(int $facultyId, string $facultyName, string $facultyDepartment): void{
            $this->facultyId = $facultyId;
            $this->facultyName = $facultyName;
            $this->facultyDepartment = $facultyDepartment;
        }

        public function printFaculty(): void{
            echo "--------------------------------<br>";
            echo "Faculty ID: {$this->facultyId}<br>";
            echo "Faculty Name: {$this->facultyName}<br>";
            echo "Faculty Department: {$this->facultyDepartment}<br>";
            echo "--------------------------------<br>";
        }

    }

    //3. Object Instantiation(បង្កើត Object)
    $faculty1 = new Faculty();
    $faculty1->setFaculty(1, "Faculty of Science", "Department of Physics");
    $faculty1->printFaculty();

    $faculty2 = new Faculty();
    $faculty2->setFaculty(2, "Faculty of Engineering", "Department of Civil Engineering");
    $faculty2->printFaculty();
    
?>