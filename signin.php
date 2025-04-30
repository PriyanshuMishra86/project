<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="css/style.css?v=1.3">
    <link rel="stylesheet" href="css/resp.css?v=1.3">
</head>

<body>
    <?php include 'partials/header.php' ?>
    <?php include 'partials/_dbconnect.php' ?>

    <?php
        $showError = "false";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['signinName'];
            $user_email = $_POST['signinEmail'];
            $phone = $_POST['signinPhone'];
            $password = $_POST['signinPassword'];
            $cpassword = $_POST['signincPassword'];

            // Check wether tihs email allready exiest or not 
            $existSql = "SELECT * FROM `users2007` WHERE user_email = '$user_email'";
            $result = mysqli_query($conn, $existSql);
            $numRows = mysqli_num_rows($result);
            if($numRows>0){
                $showError = 'Email already in use';
            }
            else{
                if($password == $cpassword){
                    // $hash = password_hash($password, PASSWORD_DEFAULT);
                    $new_hash = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `users2007` (`user_name`, `user_email`, `phone_number`, `user_pass`, `date`) VALUES ('$name', '$user_email', '$phone', '$new_hash', current_timestamp())";
                    $result = mysqli_query($conn, $sql);

                    if($result){
                        $showAlert = true;
                        header("location: index.php?signinsuccess=true");
                        exit();
                    }
                    else{
                        $showError = 'Password do not match';
                    }
                }
            }
            header("location: index.php?signinsuccess=false&error=$showError");
        }
    ?>

    <section class="signin-first-sec">
       <div class="back background-2">
            <div class="form-white">
                <div class="signin-form">
                    <h1>Sign in</h1>
                    <hr class="line">
                    <form action="signin.php" method="POST">
                        <div class="form-group">
                            <label for="signinName">Enter Your Name</label>
                            <input type="text" name="signinName" id="signinName" placeholder="Enter Your Name" required>
                        </div>

                        <div class="form-group">
                            <label for="signinEmail">Enter Your Email</label>
                            <input type="email" name="signinEmail" id="signinEmail" placeholder="Enter Your Email" required>
                        </div>

                        <div class="form-group">
                            <label for="signinPhone">Enter Your Phone Number</label>
                            <input type="signinPhone" name="signinPhone" id="signinPhone" placeholder="Enter Your Phone Number" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Create Your Password</label>
                            <input type="password" name="signinPassword" id="signinPassword" placeholder="Enter Your Password" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" name="signincPassword" id="signincPassword" placeholder="Re-Enter Your Password" required>
                        </div>
                        <button type="submit" name="submit" class="signin-btn">Sign in</button>
                    </form>
                </div>
            </div>
       </div>

    </section>

    <?php include 'partials/footer.php' ?>
    <script src="js/index.js"></script>
</body>

</html>