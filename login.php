<?php
// Include database connection
require 'db.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to fetch the user based on the email
    $sql = "SELECT * FROM blogs WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // If user is found, check if the password is correct
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Start the session and set session variables
            session_start();
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['email']; // Store user ID to manage sessions

            // Redirect to the welcome page
            header("Location: index.php");
            exit();
        } else {
            $message = "Invalid password.";
        }
    } else {
        $message = "No user found with that email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
</head>
<style>
/* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
}

.form-container {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
}

.title {
  font-size: 2rem;
  color: #333;
  text-align: center;
  margin-bottom: 20px;
}

.error-message {
  color: #ff4d4d;
  font-size: 1rem;
  text-align: center;
  margin-bottom: 20px;
}

.input-group {
  margin-bottom: 15px;
}

.input-group label {
  font-size: 1rem;
  color: #333;
  display: block;
  margin-bottom: 5px;
}

.input-group input {
  width: 100%;
  padding: 10px;
  font-size: 1rem;
  border: 1px solid #ddd;
  border-radius: 4px;
  box-sizing: border-box;
}

.submit-button {
  background-color: #3498db;
  color: #ffffff;
  padding: 10px;
  font-size: 1rem;
  width: 100%;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit-button:hover {
  background-color: #2980b9;
}

.footer-text {
  font-size: 0.9rem;
  text-align: center;
  margin-top: 10px;
}

.link {
  color: #3498db;
  text-decoration: none;
}

.link:hover {
  text-decoration: underline;
}


</style>
<body>
    <div class="container">
        <div class="form-container">
            <h2 class="title">Login</h2>

            <!-- Display any error message -->
            <?php if ($message): ?>
                <p class="error-message"><?php echo $message; ?></p>
            <?php endif; ?>

            <form action="" method="POST">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit" class="submit-button">Login</button>
            </form>
            <p class="footer-text">Don't have an account? <a href="register.php" class="link">Register</a></p>
        </div>
    </div>
</body>
</html>
