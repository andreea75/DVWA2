<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hardcoded username and password for demonstration purposes
    $username = "admin";
    $password = "admin";

    // Retrieve username and password from the form
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Check if input matches the hardcoded credentials
    if ($input_username === $username && $input_password === $password) {
        // Successful login, redirect or display success message
        header("Location: vulnerability.php");

        exit();
    } else {
        // Incorrect username or password, display error message
        echo "<div class='login-container'><h2>Login Failed!</h2><p class='error'>Incorrect username or password.</p></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Web App</title>
    <link href="index.css" rel="stylesheet" type="text/css">
</head>
<body>

<header>
    <h1>Simple PHP Web App</h1>
    <nav>
        <a href="index.html">Home</a>
        <div class="dropdown">
            <a href="#" class="dropbtn">Vulnerability</a>
            <div class="dropdown-content">
                <a href="#">Easy</a>
                <a href="#">Medium</a>
                <a href="#">Hard</a>
            </div>
        </div>
        <a href="#">Login</a>
    </nav>
</header>

<!-- Login Page Content -->
<?php echo isset($error) ? $error : ''; ?>
<!-- Login Page Content -->
<div class="login-container">
    <h2>Login</h2>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>
</div>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Simple PHP Web App</p>
</footer>

</body>
</html>
