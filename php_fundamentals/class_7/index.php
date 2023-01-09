<?php 

    $fullname = $age = $email = $website = $comment = $image = "";
    $errfullname = $errage = $erremail  = $errwebsite  = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if(empty($_POST['fullname'])){
            $errfullname = "<div class='alert alert-danger' role='alert'> Full Name is Required </div>";
        }else{
            $fullname =  validate($_POST['fullname']);
        }

        if(empty($_POST['age'])){
            $errage = "<div class='alert alert-danger' role='alert'> Age is Required </div>";
        }else{
            $age = validate($_POST['age']);
        }

        if(empty($_POST['email'])){
            $erremail = "<div class='alert alert-danger' role='alert'> Email is Required </div>";
        }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $erremail = "<div class='alert alert-danger' role='alert'> Invalid Email !! </div>";
        }else{
            $email = validate($_POST['email']);
        }

        if(empty($_POST['website'])){
            $errwebsite = "<div class='alert alert-danger' role='alert'> Website is Required </div>";
        }{
            $website = validate($_POST['website']);
        }
        $comment = validate($_POST['comment']);

        $image_name = $_FILES["imagewellup"]["name"];
        $image_tmp = $_FILES["imagewellup"]["tmp_name"];
        move_uploaded_file($image_tmp,"image/". $image_name);
        $image = "image/". $image_name;
        echo "Upload Successfully";

    
      
    }

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }   
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <h2 class="text-center text-warning">Submit Form</h2>

    <div class="container">

    <ul class="list-group mb-3">
        <li class="list-group-item"> Fullname : <?php echo $fullname ?>
        <li class="list-group-item">Age : <?php echo $age ?></li>
        <li class="list-group-item">Email : <?php echo $email ?></li>
        <li class="list-group-item">Website : <?php echo $website ?></li>
        <li class="list-group-item">Comment : <?php echo $comment ?></li>
        <li class="list-group-item">Image : <img src="<?php echo $image; ?>" alt=""></li>
    </ul>
    <hr>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name &copy;</label>
            <input type="text" class="form-control" name="fullname" id="fullname">
            <?php echo $errfullname; ?>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" id="age">
            <?php echo $errage; ?>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
            <?php echo $erremail; ?>
        </div>

        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="text" class="form-control" name="website" id="website">
            <?php echo $errwebsite; ?>
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="imagewellup" class="form-label">Image</label>
            <input type="file" name="imagewellup">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>