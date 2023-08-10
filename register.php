<?php
    require('alert.php');
    require('connection.php');

    // $password = password_hash($_POST['passwd'], PASSWORD_BCRYPT);
    // $cpassword = password_hash($_POST['cpasswd'], PASSWORD_BCRYPT);
    // $password = $_POST['passwd'];

    // $cpassword = $_POST['cpasswd'];

    if(isset($_POST['register'])){
        // $password = password_hash($_POST['passwd'], PASSWORD_BCRYPT);
        $password = password_hash($_POST['passwd'], PASSWORD_BCRYPT);
        $cpassword = $_POST['cpasswd'];
        $email_exist_query = "SELECT * FROM `registered_users` WHERE `Email`='$_POST[email]'";
        $result = mysqli_query($con, $email_exist_query);
            
        if($result){
            if(mysqli_num_rows($result)>0){
                $result_fetch = mysqli_fetch_assoc($result);
                // User already exists
                $_SESSION['registration_status'] = 'exists';
            }
            else{
                $cpassword = $_POST['cpasswd'];
                // if($password == $cpassword){
                //     $insertquery = "INSERT INTO `registered_users`(`Name`,`Email`,`Phone Number`,`Country`,`ID`,`Address`,`DOB`,`Password`)VALUES('$_POST[name]','$_POST[email]','$_POST[phn]','$_POST[country]','$_POST[id]','$_POST[address]','$_POST[dob]','$password')";
                //     $iquery = mysqli_query($con, $insertquery);

                //     if ($iquery) {
                //         echo "Registration successful!";
                //     } else {
                //         echo "Registration failed!";
                //     }
                if (password_verify($cpassword, $password)) {
                    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                        $image_dir = 'uploads/'; // Directory where you want to store the images
                        $image_name = $_FILES['image']['name'];
                        $image_tmp = $_FILES['image']['tmp_name'];
                        $image_path = $image_dir . $image_name;
                    }
                    move_uploaded_file($image_tmp, $image_path);

                    $insertquery = "INSERT INTO `registered_users`(`Name`,`Email`,`Phone Number`,`Country`,`ID`,`Address`,`DOB`,`Password`)VALUES('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['phn'] . "','" . $_POST['country'] . "','$image_path','" . $_POST['address'] . "','" . $_POST['dob'] . "','$password')";
                    $iquery = mysqli_query($con, $insertquery);

                    if ($iquery) {
                        // echo "Registration successful!";
                        echo '<script>
                                alert("Registration successful!");
                                window.location = "index.php";
                            </script>';
                    } else {
                        // echo "Registration failed!";
                        echo '<script>
                                var alertContainer = document.getElementById("alertContainer");
                                alertContainer.innerHTML = \'<div class="alert alert-danger">Registration failed!</div>\';
                                window.location = "index.php";
                            </script>';

                    }
                    
                }
                else{
                    // echo "Passwords do not match";
                    echo '<script>
                            alert("Passwords do not match")
                            window.location = "index.php";
                        </script>';
                }
            }
        }
        else{
            // Query execution failed
        }

    }
?>