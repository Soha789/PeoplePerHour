<?php
// home.php – Job Listing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | PeoplePerHour Clone</title>
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
    .welcome {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #ff6600;
    }
    .jobs {
        display: flex;
        flex-wrap: wrap;
        gap: 25px;
        justify-content: flex-start;
    }
    .job-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        width: 280px;
        padding: 20px;
        transition: transform 0.3s ease;
    }
    .job-card:hover {
        transform: translateY(-6px);
    }
    .job-card h3 {
        color: #ff6600;
        font-size: 18px;
    }
    .job-card p {
        font-size: 14px;
        color: #555;
    }
    .job-card button {
        background: #ff6600;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.3s;
    }
    .job-card button:hover {
        background: #333;
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
const jobs = [
    { title: "Logo Design for Startup", desc: "Need a creative logo for a tech startup.", budget: "$100", deadline: "2 days" },
    { title: "Website Landing Page", desc: "Design a modern, responsive landing page.", budget: "$200", deadline: "5 days" },
    { title: "Content Writing", desc: "Write SEO-friendly blog posts for travel niche.", budget: "$60", deadline: "3 days" },
    { title: "Mobile App UI", desc: "Create sleek UI screens for Android app.", budget: "$150", deadline: "4 days" }
];

function renderJobs() {
    const container = document.getElementById("jobsContainer");
    container.innerHTML = "";
    jobs.forEach(job => {
        container.innerHTML += `
        <div class="job-card">
            <h3>${job.title}</h3>
            <p>${job.desc}</p>
            <p><b>Budget:</b> ${job.budget}</p>
            <p><b>Deadline:</b> ${job.deadline}</p>
            <button onclick="applyJob('${job.title}')">Apply Now</button>
        </div>`;
    });
}

function applyJob(jobTitle) {
    alert("✅ You have applied for: " + jobTitle);
}

function goTo(page) {
    window.location.href = page;
}

window.onload = renderJobs;
</script>
</head>
<body>

<header>
    <h1>PeoplePerHour Clone</h1>
    <nav>
        <button onclick="goTo('add_jobs.php')">Add Job</button>
        <button onclick="goTo('dashboard.php')">Dashboard</button>
        <button onclick="goTo('profile.php')">Profile</button>
        <button onclick="goTo('logout.php')">Logout</button>
    </nav>
</header>

<div class="content">
    <div class="welcome">Welcome, <span id="userName"></span> 👋</div>
    <div class="jobs" id="jobsContainer"></div>
</div>

<footer>
    © 2025 PeoplePerHour Clone | Designed by You 💻
</footer>

<script>
document.getElementById("userName").textContent = localStorage.getItem("userName") || "User";
</script>

</body>
</html>
