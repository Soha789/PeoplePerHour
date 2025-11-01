<?php
// dashboard.php – Freelancer Dashboard Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard | PeoplePerHour Clone</title>
<style>
    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
        background: #f7f7f7;
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
    .content {
        padding: 40px 30px;
    }
    h2 {
        color: #ff6600;
        margin-bottom: 20px;
    }
    .stats {
        display: flex;
        flex-wrap: wrap;
        gap: 25px;
    }
    .card {
        background: white;
        width: 250px;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        text-align: center;
        transition: 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .card h3 {
        color: #ff6600;
        margin-bottom: 10px;
    }
    .card p {
        font-size: 20px;
        font-weight: bold;
        margin: 0;
    }
    .jobs {
        margin-top: 40px;
    }
    .job-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .job-item {
        background: white;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .job-item h4 {
        color: #ff6600;
        margin: 0 0 5px;
    }
    footer {
        text-align: center;
        padding: 15px;
        background: #333;
        color: white;
        margin-top: 40px;
    }
</style>
<script>
function goTo(page) {
    window.location.href = page;
}

window.onload = function() {
    animateCounter("earnings", 0, 1250, 1500);
    animateCounter("projects", 0, 8, 1200);
    animateCounter("clients", 0, 4, 1000);
}

function animateCounter(id, start, end, duration) {
    const obj = document.getElementById(id);
    let current = start;
    const step = (end - start) / (duration / 50);
    const timer = setInterval(() => {
        current += step;
        if (current >= end) {
            current = end;
            clearInterval(timer);
        }
        obj.textContent = Math.round(current);
    }, 50);
}
</script>
</head>
<body>

<header>
    <h1>PeoplePerHour Clone</h1>
    <nav>
        <button onclick="goTo('home.php')">Home</button>
        <button onclick="goTo('profile.php')">Profile</button>
        <button onclick="goTo('logout.php')">Logout</button>
    </nav>
</header>

<div class="content">
    <h2>Freelancer Dashboard</h2>

    <div class="stats">
        <div class="card">
            <h3>Total Earnings ($)</h3>
            <p id="earnings">0</p>
        </div>
        <div class="card">
            <h3>Projects Completed</h3>
            <p id="projects">0</p>
        </div>
        <div class="card">
            <h3>Clients Worked With</h3>
            <p id="clients">0</p>
        </div>
    </div>

    <div class="jobs">
        <h2>Recent Projects</h2>
        <div class="job-list">
            <div class="job-item">
                <h4>Landing Page Design</h4>
                <p>Completed – $200</p>
            </div>
            <div class="job-item">
                <h4>Logo for Tech Startup</h4>
                <p>Completed – $150</p>
            </div>
            <div class="job-item">
                <h4>Blog Writing (5 Articles)</h4>
                <p>Completed – $80</p>
            </div>
        </div>
    </div>
</div>

<footer>
    © 2025 PeoplePerHour Clone | Designed by You 💻
</footer>

</body>
</html>
