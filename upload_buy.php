<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listing of the Sell - Flat</title>
    <link rel="stylesheet" href="css/style.css?v=1.2">
    <link rel="stylesheet" href="css/resp.css?v=1.2">
</head>

<body>

    <?php include 'partials/header.php' ?>
    <?php include 'partials/_dbconnect.php' ?>

    <?php
        if (isset($_POST['submit'])) {
            $files1 = $_FILES['img1'];
            $files2 = $_FILES['img2'];
            $files3 = $_FILES['img3'];
            $files4 = $_FILES['img4'];
            $files5 = $_FILES['img5'];
            $files6 = $_FILES['img6'];
            $files7 = $_FILES['img7'];
            $files8 = $_FILES['img8'];
            $files9 = $_FILES['img9'];
            $BHK = $_POST['BHK'];
            $society_name = $_POST['society_name'];
            $super_build = $_POST['super_build'];
            $carpet = $_POST['carpet'];
            $buy = $_POST['buy'];
            $parking = $_POST['parking'];
            $address = $_POST['address'];
            $floor = $_POST['floor'];
            $facing = $_POST['facing'];
            $furnishing = $_POST['furnishing'];
            $property_age = $_POST['property_age'];
            $date = $_POST['date'];
            $water = $_POST['water'];
            // $Amenities = $_POST['Amenities'];

            // Handle Amenities as an array (from checkboxes)
            if (isset($_POST['Amenities']) && !empty($_POST['Amenities'])) {
                // Convert selected amenities into a comma-separated string
                $Amenities = implode(", ", $_POST['Amenities']);
            } else {
                $Amenities = '';  // Default value if no amenities are selected
            }

            $Description = $_POST['Description'];

            $filename1 = $files1['name'];
            $fileerror1 = $files1['error'];
            $tmp_name1 = $files1['tmp_name'];

            $filename2 = $files2['name'];
            $fileerror2 = $files2['error'];
            $tmp_name2 = $files2['tmp_name'];

            $filename3 = $files3['name'];
            $fileerror3 = $files3['error'];
            $tmp_name3 = $files3['tmp_name'];

            $filename4 = $files4['name'];
            $fileerror4 = $files4['error'];
            $tmp_name4 = $files4['tmp_name'];

            $filename5 = $files5['name'];
            $fileerror5 = $files5['error'];
            $tmp_name5 = $files5['tmp_name'];

            $filename6 = $files6['name'];
            $fileerror6 = $files6['error'];
            $tmp_name6 = $files6['tmp_name'];

            $filename7 = $files7['name'];
            $fileerror7 = $files7['error'];
            $tmp_name7 = $files7['tmp_name'];

            $filename8 = $files8['name'];
            $fileerror8 = $files8['error'];
            $tmp_name8 = $files8['tmp_name'];

            $filename9 = $files9['name'];
            $fileerror9 = $files9['error'];
            $tmp_name9 = $files9['tmp_name'];

            $fileext1 = explode('.', $filename1);
            $fileext2 = explode('.', $filename2);
            $fileext3 = explode('.', $filename3);
            $fileext4 = explode('.', $filename4);
            $fileext5 = explode('.', $filename5);
            $fileext6 = explode('.', $filename6);
            $fileext7 = explode('.', $filename7);
            $fileext8 = explode('.', $filename8);
            $fileext9 = explode('.', $filename9);

            $filecheck1 = strtolower(end($fileext1));
            $filecheck2 = strtolower(end($fileext2));
            $filecheck3 = strtolower(end($fileext3));
            $filecheck4 = strtolower(end($fileext4));
            $filecheck5 = strtolower(end($fileext5));
            $filecheck6 = strtolower(end($fileext6));
            $filecheck7 = strtolower(end($fileext7));
            $filecheck8 = strtolower(end($fileext8));
            $filecheck9 = strtolower(end($fileext9));

            $destinationfile1 = 'upload_buy/' . $filename1;
            $destinationfile2 = 'upload_buy/' . $filename2;
            $destinationfile3 = 'upload_buy/' . $filename3;
            $destinationfile4 = 'upload_buy/' . $filename4;
            $destinationfile5 = 'upload_buy/' . $filename5;
            $destinationfile6 = 'upload_buy/' . $filename6;
            $destinationfile7 = 'upload_buy/' . $filename7;
            $destinationfile8 = 'upload_buy/' . $filename8;
            $destinationfile9 = 'upload_buy/' . $filename9;

            move_uploaded_file($tmp_name1, $destinationfile1);
            move_uploaded_file($tmp_name2, $destinationfile2);
            move_uploaded_file($tmp_name3, $destinationfile3);
            move_uploaded_file($tmp_name4, $destinationfile4);
            move_uploaded_file($tmp_name5, $destinationfile5);
            move_uploaded_file($tmp_name6, $destinationfile6);
            move_uploaded_file($tmp_name7, $destinationfile7);
            move_uploaded_file($tmp_name8, $destinationfile8);
            move_uploaded_file($tmp_name9, $destinationfile9);

            $sql = "INSERT INTO `buy` (`img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `BHK`, `society_name`, `super_build`, `carpet`, `buy`, `parking`, `address`, `floor`, `facing`, `furnishing`, `property_age`, `date`, `water`, `Amenities`, `Description`) VALUES ('$destinationfile1','$destinationfile2','$destinationfile3','$destinationfile4','$destinationfile5','$destinationfile6','$destinationfile7','$destinationfile8','$destinationfile9', '$BHK', '$society_name', '$super_build', '$carpet', '$buy', '$parking', '$address', '$floor', '$facing', '$furnishing', '$property_age', '$date', '$water', '$Amenities', '$Description')";

            $result = mysqli_query($conn, $sql);

            echo 'Success';
        }

        // else{
        //     echo 'Error';
        // }
    ?>

    <section class="up-rent">
       <div class="back background-2">
            <div class="form-white">
                <div class="signin-form">
                    <h1>Leasting of the Sell Flat</h1>
                    <hr class="line">
                    <form action="upload_buy.php" method ="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="file">Upload Image 1</label>
                            <input type="file" name="img1" id="img1" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="file">Upload Image 2</label>
                            <input type="file" name="img2" id="img2" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Upload Image 3</label>
                            <input type="file" name="img3" id="img3" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Upload Image 4</label>
                            <input type="file" name="img4" id="img4" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Upload Image 5</label>
                            <input type="file" name="img5" id="img5" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Upload Image 6</label>
                            <input type="file" name="img6" id="img6" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Upload Image 7</label>
                            <input type="file" name="img7" id="img7" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Upload Image 8</label>
                            <input type="file" name="img8" id="img8" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Upload Image 9</label>
                            <input type="file" name="img9" id="img9" required>
                        </div>

                        <div class="form-group">
                            <label for="BHK">BHK</label>
                            <input type="text" name="BHK" id="BHK" placeholder="Enter BHK" required>
                        </div>

                        <div class="form-group">
                            <label for="society_name">Society Name</label>
                            <input type="text" name="society_name" id="society_name" placeholder="Enter Society Name" required>
                        </div>

                        <div class="form-group">
                            <label for="super_build">Super Build up</label>
                            <input type="text" name="super_build" id="super_build" placeholder="Enter Super Build up" required>
                        </div>

                        <div class="form-group">
                            <label for="carpet">Carpet</label>
                            <input type="text" name="carpet" id="carpet" placeholder="Enter Carpet" required>
                        </div>

                        <div class="form-group">
                            <label for="buy">Price</label>
                            <input type="text" name="buy" id="buy" placeholder="Enter Price" required>
                        </div>

                        <div class="form-group">
                            <label for="parking">Parking</label>
                            <input type="text" name="parking" id="parking" placeholder="Enter Parking" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" placeholder="Enter Property Address" required>
                        </div>

                        <div class="form-group">
                            <label for="floor">Floor</label>
                            <input type="text" name="floor" id="floor" placeholder="Enter Floor" required>
                        </div>

                        <div class="form-group">
                            <label for="facing">Facing</label>
                            <input type="text" name="facing" id="facing" placeholder="Enter Facing" required>
                        </div>

                        <div class="form-group">
                            <label for="furnishing">Furnishing</label>
                            <input type="text" name="furnishing" id="furnishing" placeholder="Enter Furnishing" required>
                        </div>

                        <div class="form-group">
                            <label for="property_age">Property Age</label>
                            <input type="text" name="property_age" id="property_age" placeholder="Enter Property Age" required>
                        </div>

                        <div class="form-group">
                            <label for="date">Property Posted Date</label>
                            <input type="date" name="date" id="date" placeholder="Enter Property Posted Date" required>
                        </div>

                        <div class="form-group">
                            <label for="water">Water Availability</label>
                            <input type="text" name="water" id="water" placeholder="Enter Water Availability" required>
                        </div>

                        <div class="form-group">
                            <label for="Amenities">Amenities Available in Society</label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Power Back Up"> Power Back Up
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Lift"> Lift
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Club House"> Club House
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Swimming Pool"> Swimming
                                Pool
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Gymnasium"> Gymnasium
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Park"> Park
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Reserved Parking"> Reserved
                                Parking
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Security"> Security
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Vaastu Compliant"> Vaastu Compliant
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Visitor Parking"> Visitor Parking
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Intercom Facility"> Intercom Facility
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Wi-Fi Connectivity"> Wi-Fi Connectivity
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Piped Gas"> Piped Gas
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Kids Play Area"> Kids Play Area
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Cycling & Jogging Track"> Cycling & Jogging Track
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Fire-Extinguisher">Fire-Extinguisher
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Water Storage">Water Storage
                            </label>
                            <label>
                                <input type="checkbox" name="Amenities[]" value="Security Fire Alarm">Security Fire Alarm
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" name="Description" id="Description" placeholder="Enter Description" required>
                        </div>
                        <button type="submit" name="submit" class="signin-btn">Submit</button>
                    </form>
                </div>
            </div>
       </div>

    </section>

   

    <?php include 'partials/footer.php' ?>
    <script src="js/index.js"></script>

</body>

</html>