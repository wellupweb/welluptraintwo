<?php
    class School{
        public $sname = "CPI SCHOOL";
        
        public function organize(){
            echo "Hello ". $this->sname . "<br>";
        }

     
    }

    class Teacher extends School {
       

        public $tname = "kuddus";

        public function take_class(){
            echo "Hello ". $this->tname . "You are from " . $this->sname . "<br>";
        }
    }

    // $school = new School();

    // $school->organize();

    $teacher = new Teacher();
    // echo $teacher->sname;
    echo "<br>";
    // $teacher->take_class();
    $teacher->organize();






?>