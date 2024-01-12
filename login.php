<?php
// Start a session
session_start();

// Check if the user is already logged in, redirect to the dashboard if true
if (isset($_SESSION["user_id"])) {
   //header("Location: Dash.php");
    //exit();
}

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query to check if the user exists
    $query = "SELECT * FROM farmers WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Password is correct, set session variables
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_email"] = $row["email"];

            // Redirect to the dashboard
            header("Location: dashboard2.php");
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

// Close the database connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title></head>
    <link href=login.css rel='stylesheet'>

<body>
    <div class="main-wrap">
        <div class="outer-wrap">
            <h1>Log in</h1>
            
            <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="email">Email</label>
                <br>
                <input type="email" name="email" id="email" placeholder="Email">
                <br>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" id="password" placeholder="Password">
                <br>
                <input type="checkbox" name="check" id="check">
                <span class="rm-me">Remember Me</span>
                <a href="#" class="fg-pa">Forgot Password?</a>
                <p class="p">Do not have an account? <a class='reg' href="signup.php">register</a> <br> <br>---------------- Back to <a class="hom" href="home.php">Home</a>--------------</p>
                <br>
                <button type="submit" class="btn">Log in</button>
            </form>
        </div>
    </div>
</body>
</html>