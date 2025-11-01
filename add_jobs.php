<?php
// add_jobs.php – Add New Job Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Job | PeoplePerHour Clone</title>
<style>
    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg, #ff944d, #ff6600);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .job-form {
        background: white;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        width: 400px;
        text-align: center;
    }
    h2 {
        color: #ff6600;
        margin-bottom: 25px;
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
        box-shadow: 0 0 5px rgba(255,102,0,0.4);
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
    .nav {
        margin-top: 15px;
        font-size: 14px;
    }
    .nav a {
        color: #ff6600;
        text-decoration: none;
        font-weight: bold;
    }
    .nav a:hover {
        text-decoration: underline;
    }
</style>
<script>
function addJob() {
    const title = document.getElementById("title").value.trim();
    const desc = document.getElementById("desc").value.trim();
    const budget = document.getElementById("budget").value.trim();
    const deadline = document.getElementById("deadline").value.trim();

    if (!title || !desc || !budget || !deadline) {
        alert("⚠️ Please fill all fields before adding a job!");
        return;
    }

    const newJob = { title, desc, budget, deadline };
    let jobs = JSON.parse(localStorage.getItem("jobs")) || [];
    jobs.push(newJob);
    localStorage.setItem("jobs", JSON.stringify(jobs));

    alert("✅ Job added successfully! Redirecting to home...");
    window.location.href = "home.php";
}
</script>
</head>
<body>

<div class="job-form">
    <h2>Post a New Job</h2>
    <input type="text" id="title" placeholder="Job Title">
    <textarea id="desc" placeholder="Job Description" rows="4"></textarea>
    <input type="text" id="budget" placeholder="Budget (e.g. $150)">
    <input type="text" id="deadline" placeholder="Deadline (e.g. 3 days)">
    <button onclick="addJob()">Add Job</button>

    <div class="nav">
        <a href="home.php">← Back to Home</a>
    </div>
</div>

</body>
</html>
