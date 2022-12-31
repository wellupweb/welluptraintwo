<?php 
    $chele = $meye = "";

   if($_SERVER['REQUEST_METHOD'] == "POST"){
    $chele = $_POST['aladin'];
    $meye = $_POST['jesmine'];

    echo $chele . "<br>";
    echo $meye . "<br>";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Chele: <?php echo $chele; ?> </h2>
    <h2>Meye: <?php echo $meye; ?> </h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="aladin">
        <input type="text" name="jesmine">
        <input type="submit">
    </form>


</body>
</html>