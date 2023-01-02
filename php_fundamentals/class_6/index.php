<?php 

    $fullname = $age = $email = $website = $comment = "";
    $errfullname = $errage = $erremail  = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if(empty($_POST['fullname'])){
            $errfullname = "<div class='alert alert-danger' role='alert'> Full Name is Required </div>";
        }else{
            $fullname =  validate($_POST['fullname']);
        }
        $age = validate($_POST['age']);
        $email = validate($_POST['email']);
        $website = validate($_POST['website']);
        $comment = validate($_POST['comment']);
      
      
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
    </ul>
    <hr>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name &copy;</label>
            <input type="text" class="form-control" name="fullname" id="fullname">
            <?php echo $errfullname; ?>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" id="age">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="text" class="form-control" name="website" id="website">
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>