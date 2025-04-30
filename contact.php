<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/style.css?v=1.3">
    <link rel="stylesheet" href="css/resp.css?v=1.3">
</head>

<body>
    <?php include 'partials/header.php' ?>
    <?php include 'partials/_dbconnect.php' ?>

    <?php
        if(isset($_POST['submit'])){
            $signinName = $_POST['signinName'];
            $signinEmail = $_POST['signinEmail'];
            $signinPhone = $_POST['signinPhone'];
            $gender = $_POST['gender'];
            $requirement = $_POST['requirement'];
            $sql = "INSERT INTO `contact2007` (`name`, `email`, `phone_number`, `agent/individual`, `requirement`, `date`) VALUES ('$signinName', '$signinEmail', '$signinPhone', '$gender', '$requirement', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            echo '<div class="alert alert-success alert-dismissible fade show my-0" id="alert-p" role="alert" style=" flex-direction: row;
                    display: flex;
                    justify-content: space-between;
                    background-color: #90d08b;
                    height: 30px;
                    padding: 15px;
                    font-size: 20px;">
                    <p><strong>Thank You! </strong> Our team will coordinate with you shortly to meet your requirements.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                        <path d="M19.0005 4.99988L5.00049 18.9999M5.00049 4.99988L19.0005 18.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    </div>';
        }

    ?>

    <section class="signin-first-sec">
        <div class="back background-3">
            <div class="form-white">
                <div class="signin-form">
                    <h1>Contact Us</h1>
                    <hr class="line">
                    <form action="contact.php" method ="POST">
                        <div class="form-group">
                            <label for="signinName">Enter Your Name</label>
                            <input type="text" name="signinName" id="signinName" placeholder="Enter Your Name" required>
                        </div>

                        <div class="form-group">
                            <label for="signinEmail">Enter Your Email</label>
                            <input type="email" name="signinEmail" id="signinEmail" placeholder="Enter Your Email"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="signinPhone">Enter Your Phone Number</label>
                            <input type="signinPhone" name="signinPhone" id="signinPhone"
                                placeholder="Enter Your Phone Number" required>
                        </div>

                        <div class="form-group">
                            <div class="spacial">
                                <label for="radio">You are Agent or Individual</label>
                                <br>
                                <input type="radio" name="gender" value="Agent" required> Agent
                                <br>
                                <input type="radio" name="gender" value="Individual" class="in"> Individual
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text">Your Requirement</label>
                            <textarea name="requirement" id="requirement" class="form-control" cols="30" rows="10"
                                placeholder="Enter Your Requirement" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="signin-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <?php include 'partials/footer.php' ?>

    <script src="js/index.js"></script>
        <!-- Bootstrap Script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>