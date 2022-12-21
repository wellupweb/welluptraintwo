<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <h2>Echo</h2>
    <?php echo "Hello world"; ?>

    <h2>Print</h2>
    <?php print "Hello Argentina"; ?>


    <h2>Print_r</h2>
    <pre>
        <?php print_r(array("hello","Brazil")) ?>
    </pre>

    <h2>Var_dump</h2>
    <pre>
        <?php  var_dump(array("hello","world")) ?>
    </pre>


    <h2>Variable</h2>
    <?php $football = "Qatar";  ?>
    <?php echo $football ?>

    <h2>Data Type</h2>

    <h3>String</h3>
    <?php echo "Hello Bangladesh"; ?>

    <h3>Integer</h3>
    <?php echo 30; ?>
    
    <h3>Float</h3>
    <?php echo 30.45 ?>

    <h3>Boolean</h3>
    <?php var_dump(true) ?>
    <?php var_dump(false) ?>

    <h3>Array</h3> 
    <?php var_dump(array("hello","world")) ?>

    <h3>Object</h3>
    <?php
        class Hello {
            public $football = "Fifa";
            public function  argentina(){
                return "3* Done";
            }
        }

        $hello = new Hello();

        echo $hello->football;
        echo "<br>";
        echo $hello->argentina();
        echo "<br>";
        var_dump($hello);
    ?> 

    <h2>Constants</h2>
    <?php
     define("fifa","Qatar");
     echo fifa;
     ?>

    <h2>While Loop</h2>
    
    <?php
        $i = 11;
        while ($i <= 10) {
            echo "The counting is " . $i . "<br>";
            $i++;
        }
    ?>

    <h2>Do while</h2>
    <?php
        $a = 11;
        do {
            echo "The counting is " . $a . "<br>";
            $a++;
        } while ($a <= 10);
    
    ?>

    <h2>For Loop</h2>
    
    <?php
        for ($j=0; $j < 10 ; $j++) { 
            echo "The counting is " . $j . "<br>";
        }
    
    ?>
    
    <h2>Foreach Loop</h2>

    <?php
        $countries = array("Bangladesh","Argentina","Brazil","France","Morocco");
        foreach ($countries as $fifa) {
            echo "The Country is " . $fifa . "<br>";
        }
    
    ?>

    <h4>Function</h4>

    <?php 
        // function sum1($i,$j){

        //     $z = $i + $j;

        //     return $z . "<br>";
        // }

        // echo sum1(30,50);
    
    ?>

    <h4>Variable Scope</h4>
    <?php 
        $a = 50;

        $k = 700;

        function sum1($i,$j){
        
            $z = $i + $j;

            return $z . "<br>";
        }

        function sum2($i,$j){
     

            $z = $i + $j;

            return $z + $GLOBALS['k'] . "<br>";
        }

        echo sum1(10,30);
        echo sum2(30,50);
    
    ?>
    <h4>Super Global Variable</h4>
    <?php 
        // $GLOBALS
        // $_SERVER
        // $_REQUEST
        // $_POST
        // $_GET
        // $_ENV
        // $_FILES
        // $_COOKIE
        // $_SESSION
    ?>
        

</body>
</html>