<?php
session_start();
echo '<header>
        <nav class="navbar h-nav-resp">
            <ul class="nav-list v-class-resp">
                <div class="logo"><img src="img/s p property.png" alt="logo"></div>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="buy_categories.php">Buy</a></li>
                <li><a href="rent_categories.php">Rent</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="review.php">Review</a></li>
            </ul>';
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                echo '<div class="rightnav v-class-resp">
                    <button class="sm-button"><a href="partials/_logout.php">Logout</a></button>
                </div>';
            }
            else {
                echo '<div class="rightnav v-class-resp">
                        <button class="sm-button"><a href="login.php">Login</a></button>
                        <button class="sm-button"><a href="signin.php">Sign in</a></button>
                      </div>';
            }
?>
            <div class="burger">
                      <div class="burger-line"></div>
                      <div class="burger-line"></div>
                      <div class="burger-line"></div>
                  </div>
<?php
      echo'</nav>
    </header>';
 ?>

<?php
        if(isset($_GET['signinsuccess']) && $_GET['signinsuccess']=="true"){
            echo '<div class="alert alert-success alert-dismissible fade show my-0" id="alert-p" role="alert" style=" flex-direction: row;
                    display: flex;
                    justify-content: space-between;
                    background-color: #90d08b;
                    height: 30px;
                    padding: 15px;
                    font-size: 20px;">
                    <p><strong>Yohoo!</strong> Now you can login.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                        <path d="M19.0005 4.99988L5.00049 18.9999M5.00049 4.99988L19.0005 18.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    </div>';
        }

        if(isset($_GET['signinsuccess']) && $_GET['signinsuccess']=="false"){
        echo '<div class="alert alert-warning alert-dismissible fade show my-0" id="alert-p" role="alert" style=" flex-direction: row;
                display: flex;
                justify-content: space-between;
                background-color: #ff00006e;
                height: 30px;
                padding: 15px;
                font-size: 20px;">
                <p><strong>Opps!</strong> This Email is allredy in use Or Password do not match.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                   <path d="M19.0005 4.99988L5.00049 18.9999M5.00049 4.99988L19.0005 18.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                   </svg>
                </button>
                </div>';
        }

        if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="true"){
            echo '<div class="alert alert-success alert-dismissible fade show my-0" id="alert-p" role="alert" style=" flex-direction: row;
                    display: flex;
                    justify-content: space-between;
                    background-color: #90d08b;
                    height: 30px;
                    padding: 15px;
                    font-size: 20px;">
                    <p><strong>Yohoo!</strong> Welcome You are Loggedin.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                        <path d="M19.0005 4.99988L5.00049 18.9999M5.00049 4.99988L19.0005 18.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    </div>';
        }

        if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false"){
        echo '<div class="alert alert-warning alert-dismissible fade show my-0" id="alert-p" role="alert" style=" flex-direction: row;
                display: flex;
                justify-content: space-between;
                background-color: #ff00006e;
                height: 30px;
                padding: 15px;
                font-size: 20px;">
                <p><strong>Opps!</strong> Please do Signin First.</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                   <path d="M19.0005 4.99988L5.00049 18.9999M5.00049 4.99988L19.0005 18.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                   </svg>
                </button>
                </div>';
        }
    ?>