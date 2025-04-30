<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css?v=1.3">
    <link rel="stylesheet" href="css/resp.css?v=1.3">
</head>

<body>
    <?php include 'partials/header.php' ?>
    <?php include 'partials/_dbconnect.php' ?>

    <?php
        $showError = "false";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['loginName'];
            $email = $_POST['loginEmail'];
            $pass = $_POST['loginpass'];

            $sql = "SELECT * FROM `users2007` WHERE user_email = '$email'";
            $result = mysqli_query($conn, $sql);
            $numRows = mysqli_num_rows($result);
            if($numRows==1){
                $row = mysqli_fetch_assoc($result);
                if(password_verify($pass, $row['user_pass'])){
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['sr'] = $row['sr'];
                    $_SESSION['useremail'] = $email;
                    echo "logged in". $email;
                    header("Location: index.php?loginsuccess=true");
                    exit();
                }
                else {
                    // Handle incorrect password
                    $showError = "Invalid password";
                }
            }
            header("Location: index.php?loginsuccess=false");
        }
    ?>

    <section class="login-first-sec">
       <div class="back background-2">
            <div class="form-white">
                <div class="signin-form">
                    <h1>Login</h1>
                    <hr class="line">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="loginName">Enter Your Name</label>
                            <input type="text" name="loginName" id="loginName" placeholder="Enter Your Name" required>
                        </div>

                        <div class="form-group">
                            <label for="loginEmail">Enter Your Email</label>
                            <input type="email" name="loginEmail" id="loginEmail" placeholder="Enter Your Email" required>
                        </div>

                        <div class="form-group">
                            <label for="loginpass">EnterYour Password</label>
                            <input type="password" name="loginpass" id="loginpass" placeholder="Enter Your Password" required>
                        </div>
                        <button type="submit" name="submit" class="signin-btn">Login</button>
                    </form>
                </div>
            </div>
       </div>

    </section>

    <?php include 'partials/footer.php' ?>
    <script src="js/index.js"></script>
</body>

</html>