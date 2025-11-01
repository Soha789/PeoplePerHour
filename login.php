<?php
// login.php – Login Page with JS redirection to home.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | PeoplePerHour Clone</title>
<style>
    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg, #ff6600, #ff944d);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #333;
    }
    .login-box {
        background: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        width: 340px;
        text-align: center;
    }
    h2 {
        color: #ff6600;
        margin-bottom: 20px;
    }
    input {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 15px;
    }
    button {
        width: 100%;
        padding: 12px;
        background: #ff6600;
        color: white;
        border: none;
        font-weight: bold;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }
    button:hover {
        background: #333;
    }
    .signup-link {
        margin-top: 15px;
        font-size: 14px;
    }
    .signup-link a {
        color: #ff6600;
        text-decoration: none;
        font-weight: bold;
    }
    .signup-link a:hover {
        text-decoration: underline;
    }
</style>
<script>
function loginUser() {
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const savedName = localStorage.getItem("userName");

    if (!email || !password) {
        alert("⚠️ Please enter both email and password!");
        return;
    }

    if (!savedName) {
        alert("❌ No account found! Please sign up first.");
        window.location.href = "signup.php";
        return;
    }

    alert("✅ Login successful! Redirecting to your home...");
    window.location.href = "home.php";
}
</script>
</head>
<body>

<div class="login-box">
    <h2>Login to Your Account</h2>
    <input type="email" id="email" placeholder="Email Address">
    <input type="password" id="password" placeholder="Password">
    <button onclick="loginUser()">Login</button>

    <div class="signup-link">
        Don’t have an account? <a href="signup.php">Sign up</a>
    </div>
</div>

</body>
</html>
