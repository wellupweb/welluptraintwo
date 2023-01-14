<?php
    class Calculator{
        public $extra_num = 50;
        public $numberone;
        public $numbertwo;

        public function __construct($num1,$num2)
        {
            $this->numberone = $num1;
            $this->numbertwo = $num2;
        }

        public function add(){
            $cal =  $this->numberone +  $this->numbertwo + $this->extra_num ;
            return $cal;
        }

        public function subs(){
            $cal =  $this->numberone -  $this->numbertwo + $this->extra_num;
            return $cal;
        }

        public function multi(){
            $cal = $this->numberone *  $this->numbertwo + $this->extra_num;
            return $cal;
        }

        public function divi(){
            $cal = $this->numberone /  $this->numbertwo + $this->extra_num;
            return $cal;
        }

    }


?>