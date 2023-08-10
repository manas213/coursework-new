<?php
    require("connection.php");
    
    // Fetch all rooms from the database
    $query = "SELECT * FROM rooms";
    $result = mysqli_query($con, $query);
?>

<!-- Display the list of rooms -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Rooms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        table {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        a.delete-link {
            color: #dc3545;
        }
        a.delete-link:hover {
            color: #c82333;
        }
        a.edit-link {
            color: #28a745;
        }
        a.edit-link:hover {
            color: #218838;
        }
        a.create-link {
            display: block;
            margin-top: 10px;
            color: #17a2b8;
        }
        a.create-link:hover {
            color: #138496;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Room Name</th>
            <th>Features</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['features']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td>
                    <a class="edit-link" href="editRooms.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a class="delete-link" href="deleteRooms.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this room?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a class="btn btn-secondary create-link" href="createRoom.php">Create New Room</a>
</body>
</html>

