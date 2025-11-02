<?php
// profile.php – User Profile Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile | PeoplePerHour Clone</title>
<style>
    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
        background: #f9f9f9;
        color: #333;
    }
    header {
        background: #ff6600;
        color: white;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    header h1 {
        font-size: 22px;
    }
    nav button {
        background: white;
        color: #ff6600;
        border: none;
        padding: 10px 16px;
        border-radius: 6px;
        margin-left: 10px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }
    nav button:hover {
        background: #333;
        color: white;
    }
    .profile-container {
        background: white;
        width: 420px;
        margin: 60px auto;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        text-align: center;
    }
    h2 {
        color: #ff6600;
        margin-bottom: 20px;
    }
    input, textarea {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 15px;
        transition: 0.2s;
    }
    input:focus, textarea:focus {
        border-color: #ff6600;
        outline: none;
        box-shadow: 0 0 5px rgba(255,102,0,0.3);
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
        margin-top: 10px;
    }
    button:hover {
        background: #333;
    }
    .logout {
        margin-top: 20px;
        background: #ff3300;
    }
    .logout:hover {
        background: #111;
    }
</style>
<script>
function loadProfile() {
    document.getElementById("name").value = localStorage.getItem("userName") || "";
    document.getElementById("role").textContent = localStorage.getItem("userRole") || "User";
    document.getElementById("bio").value = localStorage.getItem("userBio") || "";
    document.getElementById("skills").value = localStorage.getItem("userSkills") || "";
}

function saveProfile() {
    const name = document.getElementById("name").value.trim();
    const bio = document.getElementById("bio").value.trim();
    const skills = document.getElementById("skills").value.trim();

    if (!name || !bio || !skills) {
        alert("⚠️ Please fill out all fields before saving!");
        return;
    }

    localStorage.setItem("userName", name);
    localStorage.setItem("userBio", bio);
    localStorage.setItem("userSkills", skills);
    alert("✅ Profile updated successfully!");
}

function logout() {
    if (confirm("Are you sure you want to log out?")) {
        window.location.href = "logout.php";
    }
}

function goTo(page) {
    window.location.href = page;
}
</script>
</head>
<body onload="loadProfile()">

<header>
    <h1>PeoplePerHour Clone</h1>
    <nav>
        <button onclick="goTo('home.php')">Home</button>
        <button onclick="goTo('dashboard.php')">Dashboard</button>
        <button onclick="logout()">Logout</button>
    </nav>
</header>

<div class="profile-container">
    <h2>Your Profile</h2>
    <input type="text" id="name" placeholder="Full Name">
    <p><b>Role:</b> <span id="role"></span></p>
    <textarea id="bio" rows="3" placeholder="Write a short bio..."></textarea>
    <textarea id="skills" rows="2" placeholder="Your key skills (comma separated)..."></textarea>
    <button onclick="saveProfile()">Save Changes</button>
    <button class="logout" onclick="logout()">Logout</button>
</div>

</body>
</html>
