<?php
require("connection.php");

if (isset($_GET['id'])) {
    $roomId = $_GET['id'];

    // Fetch the room data based on the provided ID
    $query = "SELECT * FROM rooms WHERE id = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "i", $roomId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $roomData = mysqli_fetch_assoc($result);

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}

if (isset($_POST['saveChanges'])) {
    // Extract the data from the form submission
    $roomName = $_POST['roomName'];
    $features = $_POST['features'];
    $price = $_POST['price'];
    // Extract more data as needed

    // Update the room data in the database
    $updateQuery = "UPDATE rooms SET name = ?, features = ?, price = ? WHERE id = ?";
    $stmt = mysqli_prepare($con, $updateQuery);
    mysqli_stmt_bind_param($stmt, "ssdi", $roomName, $features, $price, $roomId);
    mysqli_stmt_execute($stmt);

    // Redirect back to the manageRooms.php page
    header("Location: manageRooms.php");
    exit();
}
?>

<!-- Display the form for editing the room -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Room</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }
        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <input type="hidden" name="roomId" value="<?php echo $roomId; ?>">
        <label for="roomName">Room Name:</label>
        <input type="text" name="roomName" value="<?php echo $roomData['name']; ?>"><br>
        <label for="features">Features:</label>
        <input type="text" name="features" value="<?php echo $roomData['features']; ?>"><br>
        <label for="price">Price:</label>
        <input type="number" name="price" value="<?php echo $roomData['price']; ?>"><br>
        <!-- Add more input fields for other data as needed -->
        <button type="submit" name="saveChanges">Save Changes</button>
    </form>
</body>
</html>
