<?php
// signup.php – Signup Page with Role Selection (Freelancer / Client)
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup | PeoplePerHour Clone</title>
<style>
    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg, #ff944d, #ff6600);
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        background: white;
        padding: 40px;
        border-radius: 12px;
        width: 350px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        text-align: center;
    }
    h2 {
        color: #ff6600;
        margin-bottom: 20px;
    }
    input, select {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 15px;
    }
    button {
        width: 100%;
        background: #ff6600;
        color: white;
        border: none;
        padding: 12px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 8px;
        margin-top: 10px;
        cursor: pointer;
        transition: 0.3s;
    }
    button:hover {
        background: #333;
    }
    .login-link {
        margin-top: 15px;
        font-size: 14px;
    }
    .login-link a {
        color: #ff6600;
        text-decoration: none;
        font-weight: bold;
    }
    .login-link a:hover {
        text-decoration: underline;
    }
</style>
<script>
function signUpUser() {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const role = document.getElementById('role').value;

    if (!name || !email || !password || role === "") {
        alert("⚠️ Please fill out all fields before signing up!");
        return;
    }

    localStorage.setItem("userName", name);
    localStorage.setItem("userRole", role);
    alert("✅ Signup successful! Redirecting to login...");
    window.location.href = "login.php";
}
</script>
</head>
<body>

<div class="container">
    <h2>Create Your Account</h2>
    <input type="text" id="name" placeholder="Full Name">
    <input type="email" id="email" placeholder="Email Address">
    <input type="password" id="password" placeholder="Password">
    <select id="role">
        <option value="">Select Role</option>
        <option value="Freelancer">Freelancer</option>
        <option value="Client">Client</option>
    </select>
    <button onclick="signUpUser()">Sign Up</button>

    <div class="login-link">
        Already have an account? <a href="login.php">Login here</a>
    </div>
</div>

</body>
</html>
