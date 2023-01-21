<?php
    $link = new mysqli("localhost", "root", "", "mips");
    if(isset($_GET['info_id'])){
        $info_id = $_GET['info_id'] ;
        $table_row = $link->query("select * from info where id = $info_id ");
        $result = $table_row->fetch_assoc();

    }

    if(isset($_GET['success']) && $_GET['success'] == 1){
        echo "Updated Successfully";
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $id = $_POST["info_id"];
    
        $update_row = $link->query("
        update info set
        firstname = '$fname',
        lastname = '$lname'
        where id = $id
        ");
        if ($update_row) {
            header("Location: edit.php?info_id=$id&success=1");
        } else {
            echo "update info set
            firstname = '$fname',
            lastname = '$lname'
            where id = $id
            ";
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
    <title>Edit Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="hidden" name="info_id" value="<?php if(isset($result['id'])){echo $result['id'];}else{ echo ""; }  ?>">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="fname" value="<?php if(isset($result['firstname'])){echo $result['firstname'];}else{ echo ""; }  ?>">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lname" value="<?php if(isset($result['lastname'])){echo $result['lastname'];}else{ echo ""; }  ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>