<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/resp.css?v=<?php echo time(); ?>">
</head>

<body>

    <?php include 'partials/header.php' ?>
    <?php include 'partials/_dbconnect.php' ?>

    <?php
        if(isset($_POST['submit'])){
            $feedName = $_POST['feedName'];
            $feedemail = $_POST['feedemail'];
            $feednumber = $_POST['feednumber'];
            $gender = $_POST['gender'];
            $feedmess = $_POST['feedmess'];

            $sql = "INSERT INTO `feedback2007` (`name`, `email`, `phone_number`, `agent/individual`, `feedbackdesc`, `date`) VALUES ('$feedName', '$feedemail', '$feednumber', '$gender', '$feedmess', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            echo '<div class="alert alert-success alert-dismissible fade show my-0" id="alert-p" role="alert" style=" flex-direction: row;
            display: flex;
            justify-content: space-between;
            background-color: #90d08b;
            height: 30px;
            padding: 15px;
            font-size: 20px;">
            <p><strong>Thank You </strong> for your feedback, You can view it on the Review Page.</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                <path d="M19.0005 4.99988L5.00049 18.9999M5.00049 4.99988L19.0005 18.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            </div>';
        }
    ?>

    <section class="signin-first-sec">
        <div class="back background-6">
            <div class="form-white">
                <div class="signin-form">
                    <h1>Feedback</h1>
                    <hr class="line">
                    <form action="feedback.php" method ="POST">
                        <div class="form-group">
                            <label for="feedName">Enter Your Name</label>
                            <input type="text" name="feedName" id="feedName" placeholder="Enter Your Name" required>
                        </div>

                        <div class="form-group">
                            <label for="feedemail">Enter Your Email</label>
                            <input type="email" name="feedemail" id="feedemail" placeholder="Enter Your Email"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="feednumber">Enter Your Phone Number</label>
                            <input type="feednumber" name="feednumber" id="signinPhone"
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
                            <label for="text">Enter Your Feedback</label>
                            <textarea name="feedmess" id="feedmess" class="form-control" cols="30" rows="10"
                                placeholder="Enter Your Feedback" required></textarea>
                        </div>
                        <p class="note"><span>Note:</span> Feedback Given by you will be visible to Review Page.</p>
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