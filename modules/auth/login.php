<?php
// Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/auth.css">
    <title>login page</title>
</head>
<body>
    <div class="container">
        <h1>University Login Portal</h1>
        <div class="form-box" id="login-form">
            
            <form action="">
                
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <label>Email/Reg Number</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box"> 
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    
                </div>
                <div class="remember-forgot">
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>