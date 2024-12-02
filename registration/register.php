<?php 
$username = $password = ""; // Initialize variables
$usernameErr = $passwordErr = ""; // Initialize error variables

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["userName"])) {
        $usernameErr = "Username is required";
    } else {
        $username = htmlspecialchars($_POST["userName"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = htmlspecialchars($_POST["password"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link  rel="stylesheet" href="register.css"/>
</head>
<body>
    <div class="container">
        <h1 class="title">Registration</h1>
        <h2 class="subtitle">Create a new account</h2>
        <form class="registration-form" method="POST" action="">
            <label class="label" for="userName">Username</label>
            <input class="input"
                type="text" 
                name="userName" 
                id="userName" 
                value="<?php echo htmlspecialchars($username); ?>" 
                placeholder="Enter Username"
            />
            <span class="error"><?php echo $usernameErr; ?></span>

            <label class="label" for="password">Password</label>            
            <input 
                type="password" 
                name="password" 
                id="password" 
                value="<?php echo htmlspecialchars($password); ?>" 
                placeholder="Enter Password"
                class="input"
            />
            <span class="error"><?php echo $passwordErr; ?></span>

            <button class="button" type="submit">Register</button>
            <span class="text">Already have an account? <a href="login.php">Login</a></span>  
        </form>
    </div>
</body>
</html>
