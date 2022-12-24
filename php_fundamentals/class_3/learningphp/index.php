<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_REQUEST["username"];
        if(empty($name)){
            echo "<p style='color:red;background:black;padding:30px'>Field Must Rquired!!</p>";
        }else{
            echo "<p style='color:white;background:black;padding:30px'>Name: ".$name."</p>";
        }
    }
?>

<!-- <h4>Server</h4> -->
<?php //echo $_SERVER["PHP_SELF"] . "<br>"; ?>
<?php // echo $_SERVER["SERVER_ADDR"] . "<br>"; ?>
<?php //echo $_SERVER["SERVER_NAME"] . "<br>"; ?>
<?php //echo $_SERVER["SERVER_SOFTWARE"] . "<br>"; ?>
<?php //echo $_SERVER["SERVER_PROTOCOL"] . "<br>"; ?>
<?php //echo $_SERVER["SERVER_PORT"] . "<br>"; ?>

<h4> Request Super Global Variable </h4>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <input type="text" name="username">
    <input type="submit">
</form>

<a href="test.php?email=armanhossen591@gmail.com&message=This is your Message">Send Your Info</a>

<form action="test.php" method="GET">
    <input type="text" name="email">
    <input type="text" name="message">
    <input type="submit" value="Submit">
</form>

