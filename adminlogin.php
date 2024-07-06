<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Loginstyle.css">
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('adminlogin.jpg'); 
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 2;
}
</style>
</head> 
<body>
    <div class="login-container">
        <h2>Login</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
    
        <?php
        session_start();
        $showError = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'config.php';
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            //Must use this as admin username and password
            if ($username === "pavan" && $password === "1919") {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: admin.php");
                exit;
            } else {
                $showError = true;
            }
        }

        if ($showError) {
            echo "<p class='error'>Invalid username or password!</p>";
        }
        ?>
    </div>
</body>
</html>
