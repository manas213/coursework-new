
<?php
require("connection.php");
require("alert.php");

function input_filter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['userLogin'])) {
    $userEmail = input_filter($_POST['uemail']);
    $userPass = input_filter($_POST['upasswd']);

    // Use prepared statements to avoid SQL injection
    $email_exist_query = "SELECT * FROM `registered_users` WHERE `Email`=?";
    $stmt = mysqli_prepare($con, $email_exist_query);
    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);

    // Get the result from the prepared statement
    $result = mysqli_stmt_get_result($stmt);

    // Check if there is a matching user
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($userPass, $row['Password'])) {
            session_start();
            $_SESSION['userEmail'] = $userEmail;
            header("location: userPage.php");
            exit();
        } else {
            // Password does not match
            alert('error', 'Login failed- Invalid username or password');
            // $_SESSION['login_error'] = 'Invalid username or password';
        }
    } else {
        // No user found with the given email
        alert('error', 'Login failed- User not found');
        // $_SESSION['login_error'] = 'User not found';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>
