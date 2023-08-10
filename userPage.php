<?php
    session_start();
    session_regenerate_id(true);
    if(!isset($_SESSION['userEmail'])){
        header("location: index.php");
    }
    require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
        <link rel="stylesheet" href="css/rooms.css">
    </head>
    <body>
        <?php
            // Fetch user data from the database using the email address
            $userEmail = $_SESSION['userEmail'];

            $getUserQuery = "SELECT Name FROM registered_users WHERE Email = ?";
            $stmt = mysqli_prepare($con, $getUserQuery);
            mysqli_stmt_bind_param($stmt, "s", $userEmail);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $userName);
            mysqli_stmt_fetch($stmt);
            mysqli_stmt_close($stmt);
        ?>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <h5 class="navbar-brand">Welcome, <?php echo $userName; ?></h5>
                    <div class="logout">
                        <a href="logout.php" class="btn btn-secondary"><i class="bi bi-box-arrow-right"></i> Logout</a>
                    </div>
            </div>
        </nav>
        <h4 style="text-align: center; padding: 10px; font-weight: bold;">All Rooms</h4>
        <div class='container rooms-page-wrapper'>
            <div class="row rooms-page gx-5">
                <div class='col-lg-8 col-md-12 col-12'>
                    <div class="row rooms-container">
                        <div class="col-lg-5 col-md-4 rooms">
                            <img src="images/room2.avif">
                        </div>
                        <div class="col-lg-5 col-md-4 room-type">
                            <h5><strong>Single Room</strong> </h5>
                            <h6><strong>Features</strong></h6>
                            <div class="room-type-inside">
                                <span>Internet</span>
                                <span>Hot Water</span>
                            </div>
                            <h6><strong>Guests</strong></h6>
                            <div class="room-type-inside"> 
                                <span>1 Adult</span>
                                <span>1 Children</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 room-book ">
                            <span><strong>Rs. 800</strong></span>
                            <form method="POST" action="">
                                <input type="hidden" name="roomName" value="Single Room">
                                <button class="btn btn-primary" name="bookRoom">Book now</button>
                            </form>
                        </div>
                    </div>

                    <div class="row rooms-container">
                        <div class="col-lg-5 col-md-4 rooms">
                            <img src="images/room2.avif">
                        </div>
                        <div class="col-lg-5 col-md-4 room-type">
                            <h5><strong>Double Room</strong> </h5>
                            <h6><strong>Features</strong></h6>
                            <div class="room-type-inside">
                                <span>Internet</span>
                                <span>Hot Water</span>
                                <span>Air Conditioner</span>
                            </div>
                            <h6><strong>Guests</strong></h6>
                            <div class="room-type-inside"> 
                                <span>2 Adult</span>
                                <span>1 Children</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 room-book ">
                            <span><strong>Rs. 1000</strong></span>
                            <form method="POST" action="">
                                <input type="hidden" name="roomName" value="Double Room">
                                <button class="btn btn-primary" name="bookRoom">Book now</button>
                            </form>
                        </div>
                    </div>

                    <div class="row rooms-container">
                        <div class="col-lg-5 col-md-4 rooms">
                            <img src="images/room2.avif">
                        </div>
                        <div class="col-lg-5 col-md-4 room-type">
                            <h5><strong>Family Room</strong> </h5>
                            <h6><strong>Features</strong></h6>
                            <div class="room-type-inside">
                                <span>Internet</span>
                                <span>Air Conditioner</span>
                                <span>Television</span>
                                <span>Multiple Bathrooms</span>
                            </div>
                            <h6><strong>Guests</strong></h6>
                            <div class="room-type-inside"> 
                                <span>2 Adult</span>
                                <span>3 Children</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 room-book ">
                            <span><strong>Rs. 1500</strong></span>
                            <form method="POST" action="">
                                <input type="hidden" name="roomName" value="Family Room"> 
                                <button class="btn btn-primary" name="bookRoom">Book now</button>
                            </form>
                        </div>
                    </div>
                    <div class="row rooms-container">
                        <div class="col-lg-5 col-md-4 rooms">
                            <img src="images/room2.avif">
                        </div>
                        <div class="col-lg-5 col-md-4 room-type">
                            <h5><strong>Luxury Room</strong> </h5>
                            <h6><strong>Features</strong></h6>
                            <div class="room-type-inside">
                                <span>Internet</span>
                                <span>Hot Water</span>
                                <span>Air Conditioner</span>
                                <span>Balcony View</span>
                            </div>
                            <h6><strong>Guests</strong></h6>
                            <div class="room-type-inside"> 
                                <span>3 Adult</span>
                                <span>2 Children</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 room-book ">
                            <span><strong>Rs. 500</strong></span>
                            <form method="POST" action="">
                                <input type="hidden" name="roomName" value="Luxury Room">
                                <button class="btn btn-primary" name="bookRoom">Book now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            if (isset($_POST['bookRoom'])) {
                // Get user email from session
                $userEmail = $_SESSION['userEmail']; 
            
                // Extract room name from form
                $roomName = $_POST['roomName']; 

                // Get the current date
                $bookingDate = date('Y-m-d'); // Current date
            
                // Insert booking into database
                $insertQuery = "INSERT INTO bookings (user_email, room_name, booking_date) VALUES (?, ?, ?)";
                $stmt = mysqli_prepare($con, $insertQuery);
                mysqli_stmt_bind_param($stmt, "sss", $userEmail, $roomName, $bookingDate);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                header("location: booked_rooms.php");
                exit();
            }
        ?>
    </body>
</html>