<?php
require("connection.php");

if (isset($_POST['createRoom'])) {
    // Extract the data from the form submission
    $roomName = $_POST['roomName'];
    $features = $_POST['features'];
    $price = $_POST['price'];
    // Extract more data as needed

    // Insert the new room data into the database
    $insertQuery = "INSERT INTO rooms (name, features, price) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $insertQuery);
    mysqli_stmt_bind_param($stmt, "ssd", $roomName, $features, $price);
    mysqli_stmt_execute($stmt);

    // Redirect back to the manageRooms.php page
    header("Location: manageRooms.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Rooms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        h2 {
            text-align: center;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
        }

        label, input, button {
            display: block;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        a {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create a New Room</h2>

        <!-- Form for creating a new room -->
        <form method="POST" action="">
            <label for="roomName">Room Name:</label>
            <input type="text" name="roomName" required>
            <label for="features">Features:</label>
            <input type="text" name="features" required>
            <label for="price">Price:</label>
            <input type="number" name="price" required>
            <button type="submit" name="createRoom">Create Room</button>
        </form>

        <!-- Table for displaying existing rooms -->
        <h2>Existing rooms</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Room Name</th>
                <th>Features</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            <?php
            // Fetch all rooms from the database
            require("connection.php");
            $query = "SELECT * FROM rooms";
            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['features']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td>
                        <a href="editRooms.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="deleteRooms.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this room?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>