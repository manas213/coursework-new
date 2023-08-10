<?php
session_start();
session_regenerate_id(true);
if (!isset($_SESSION['userEmail'])) {
    header("location: index.php");
    exit();
}
require("connection.php");

// Retrieve the booked rooms for the user from the database
$userEmail = $_SESSION['userEmail'];
$selectQuery = "SELECT * FROM bookings WHERE user_email = ?";
$stmt = mysqli_prepare($con, $selectQuery);
mysqli_stmt_bind_param($stmt, "s", $userEmail);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Display the booked rooms
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked Rooms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            padding: 20px;
        }
        .room-card {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 20px;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .room-info {
            flex: 1;
        }
        h2 {
            margin: 0;
            color: #007bff;
        }
        p {
            margin: 0;
            color: #333;
        }
    </style>
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
                <h5 class="navbar-brand"><?php echo $userName; ?></h5>
                    <div class="logout">
                        <a href="logout.php" class="btn btn-secondary"><i class="bi bi-box-arrow-right"></i> Logout</a>
                    </div>
            </div>
        </nav>
    <h1>Booked Rooms</h1>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <div class="room-card">
            <div class="room-info">
                <h2>Room: <?php echo $row['room_name']; ?></h2>
                <p>Booking Date: <?php echo $row['booking_date']; ?></p>
            </div>
        </div>
    <?php endwhile; ?>
</body>
</html>

