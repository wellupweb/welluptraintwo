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
    
    



</body>
</html>