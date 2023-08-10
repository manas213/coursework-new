<?php
require("connection.php");

if (isset($_GET['id'])) {
    $roomId = $_GET['id'];

    // Delete the room from the database
    $deleteQuery = "DELETE FROM rooms WHERE id = ?";
    $stmt = mysqli_prepare($con, $deleteQuery);
    mysqli_stmt_bind_param($stmt, "i", $roomId);
    mysqli_stmt_execute($stmt);

    // Redirect back to the managerooms.php page
    header("Location: manageRooms.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Room</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .delete-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        .delete-container h2 {
            margin-top: 0;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-container button, .btn-container a {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .btn-confirm {
            background-color: #d9534f;
        }

        .btn-cancel {
            background-color: #5bc0de;
        }
    </style>
</head>
<body>
    <div class="delete-container">
        <h2>Delete Room</h2>
        <p>Are you sure you want to delete this room?</p>
        <div class="btn-container">
            <form method="POST" action="">
                <input type="hidden" name="roomId" value="<?php echo $_GET['id']; ?>">
                <button class="btn-confirm" type="submit" name="confirmDelete">Yes, Delete</button>
            </form>
            <a class="btn-cancel" href="managerooms.php">Cancel</a>
        </div>
    </div>
</body>
</html>
