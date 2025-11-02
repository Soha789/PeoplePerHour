<?php
// logout.php – Clears session/localStorage and redirects to login
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Logout | PeoplePerHour Clone</title>
<style>
    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg, #ff944d, #ff6600);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
    }
    .box {
        background: rgba(255, 255, 255, 0.15);
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        backdrop-filter: blur(6px);
        animation: fadeIn 1s ease;
    }
    h2 {
        margin-bottom: 15px;
    }
    p {
        margin-bottom: 25px;
    }
    button {
        background: white;
        color: #ff6600;
        border: none;
        padding: 12px 24px;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }
    button:hover {
        background: #333;
        color: white;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
</style>
<script>
function completeLogout() {
    localStorage.clear();
    document.getElementById("msg").textContent = "✅ You’ve been logged out successfully!";
    setTimeout(() => {
        window.location.href = "login.php";
    }, 1500);
}
window.onload = completeLogout;
</script>
</head>
<body>
    <div class="box">
        <h2>Logging Out...</h2>
        <p id="msg">Please wait a moment.</p>
        <button onclick="window.location.href='login.php'">Go to Login</button>
    </div>
</body>
</html>
