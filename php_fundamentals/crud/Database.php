<?php 
    class Database{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "mips";

        private $link;

        public function __construct()
        {
            $this->link = new mysqli($this->host,$this->user,$this->password,$this->database);

            $result = $this->link->query("select * from info");
            echo "<pre>";
            var_dump($result->fetch_all());
            echo "</pre>";
        }

    }




?>