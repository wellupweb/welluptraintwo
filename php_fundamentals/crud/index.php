<?php

$link = new mysqli("localhost", "root", "", "mips");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    $insert_row = $link->query("insert into info(firstname,lastname) values('$fname','$lname')");
    if ($insert_row) {
        echo "Inserted Successfully";
    } else {
        echo "insert into info(firstname,lastname) values($fname,$lname)";
        die();
    }
}


$table_data = $link->query("select * from info ");
// if($table_data->num_rows > 0 ){
//     echo "<pre>";
//     // var_dump($table_data->fetch_all());
//     var_dump($table_data->fetch_assoc());
//     var_dump($table_data->fetch_assoc());
//     var_dump($table_data->fetch_assoc());
//     echo "</pre>";
//     die();
// }





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

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while($result = $table_data->fetch_assoc()){ 
                $i++;    
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $result["firstname"]; ?></td>
                    <td><?php echo $result["lastname"]; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>