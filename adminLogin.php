<?php
    require("alert.php");
    require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/adminlogin.css">
</head>
<body>
    <div class="container">
        <div class="admForm">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <h2>ADMIN LOGIN</h2>
                <input type="text" required placeholder="Admin Name" name="adminName">
                <input type="password" required placeholder="Password" name="adminPass">
                <button type="submit" name="adminLogin">LOGIN</button>
            </form>
        </div>
        <div class="admImg">
            <img src="images/admin.png">
        </div>
    </div>

    <?php
        function input_filter($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if(isset($_POST['adminLogin']))
        {
            // filtering user input
            $adminName = input_filter($_POST['adminName']);
            $adminPass = input_filter($_POST['adminPass']);
            
            $adminName = mysqli_real_escape_string($con, $adminName);
            $adminPass = mysqli_real_escape_string($con, $adminPass);
    
            $query = "SELECT * FROM `admin` WHERE `Admin Name`=? AND `Admin Password`=?";
    
            if($SQLstmt=mysqli_prepare($con, $query))
            {
                mysqli_stmt_bind_param($SQLstmt, "ss", $adminName, $adminPass);
                mysqli_stmt_execute($SQLstmt);
                mysqli_stmt_store_result($SQLstmt);

                if(mysqli_stmt_num_rows($SQLstmt)==1)
                {
                    session_start();
                    $_SESSION['AdminLoginID'] = $adminName;
                    header("location: adminPage.php");
                }
                else
                {
                    alert('error', 'Login failed- Invalid username or password');
                }
                mysqli_stmt_close($SQLstmt);
            }
            else
            {
                alert('error', 'Login failed- Invalid username or password');
            }
        }
    ?>
</body>
</html>