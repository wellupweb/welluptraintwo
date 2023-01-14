<?php 
    include "Calculator.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numberone = $_POST['numberone'];
        $numbertwo = $_POST['numbertwo'];
        
        $calc = new Calculator($numberone,$numbertwo);

        echo "The sum is " .$calc->add() . "<br>";
        // echo "The subs is " .$calc->subs($numberone,$numbertwo) . "<br>";
        // echo "The multi is " .$calc->multi($numberone,$numbertwo) . "<br>";
         echo "The divi is " .$calc->divi() . "<br>";
       
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="mb-3">
                <label for="numberone" class="form-label">Number One</label>
                <input type="number" class="form-control" name="numberone">
            </div>
            <div class="mb-3">
                <label for="numbertwo" class="form-label">Number Two</label>
                <input type="number" class="form-control" name="numbertwo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
<footer>
    <h2>Hello world</h2>
</footer>
</html>