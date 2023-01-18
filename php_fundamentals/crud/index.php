<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" ){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        
        $link = new mysqli("localhost","root","","mips");
        $insert_row = $link->query("insert into info(firstname,lastname) values('$fname','$lname')"); 

        if($insert_row){
            echo "Inserted Successfully";
        }else{
            echo "insert into info(firstname,lastname) values($fname,$lname)";
            die();
        }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="fname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lname">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>