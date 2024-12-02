<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
</head>
<body>
    <?php
    
    $userName = $password = "";
    $userNameErr = $passwordErr = "";

  
    $validUserName = "test";
    $validPassword = "123";

   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isValid = true; // Flag for validation

      
        if (empty($_POST['userName'])) {
            $userNameErr = "Please enter your username";
            $isValid = false;
        } else {
            $userName = htmlspecialchars($_POST['userName']);
        }

       
        if (empty($_POST['password'])) {
            $passwordErr = "Please enter your password";
            $isValid = false;
        } else {
            $password = htmlspecialchars($_POST['password']);
        }

      
        if ($isValid && $userName === $validUserName && $password === $validPassword) {
            // Redirect to success.php
            header("Location: success.php");
            exit();
        } elseif ($isValid) {
            
            $passwordErr = "Invalid username or password";
        }
    }
    ?>

    <div class="container">
        <h1 class="title">Welcome Back!</h1>
        <h2 class="subtitle">Please log in</h2>

        <form class="login-form" method="POST" action="">
           
            <label class="label" for="userName">Username</label>
            <input class="input"
                type="text" 
                name="userName" 
                id="userName" 
                value="<?php echo htmlspecialchars($userName); ?>" 
                placeholder="Enter Username"
            />
            <span class="error"><?php echo $userNameErr; ?></span>

           
            <label class="label" for="password">Password</label>
            <input 
                class="input"
                type="password" 
                name="password" 
                id="password" 
                value="<?php echo htmlspecialchars($password); ?>" 
                placeholder="Enter Password"
            />
            <span class="error"><?php echo $passwordErr; ?></span>

           
            <button class="button" type="submit">Login</button>
            <span class="text">Don't have an account? <a href="register.php">Sign up</a></span>  
        </form>
    </div>
</body>
</html>
