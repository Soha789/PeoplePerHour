<?php
// index.php – PeoplePerHour Clone Homepage
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PeoplePerHour Clone</title>
<style>
    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
        background: linear-gradient(to bottom right, #fff, #f9f9f9);
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
        margin: 0;
        font-size: 24px;
        letter-spacing: 1px;
    }
    nav button {
        background: white;
        color: #ff6600;
        border: none;
        padding: 10px 18px;
        margin-left: 10px;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }
    nav button:hover {
        background: #333;
        color: white;
    }
    .hero {
        text-align: center;
        padding: 100px 20px;
        background: linear-gradient(135deg, #ff6600, #ff944d);
        color: white;
    }
    .hero h2 {
        font-size: 42px;
        margin-bottom: 10px;
    }
    .hero p {
        font-size: 18px;
        margin-bottom: 30px;
    }
    .hero button {
        background: white;
        color: #ff6600;
        border: none;
        padding: 14px 28px;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .hero button:hover {
        background: #333;
        color: white;
    }
    .featured {
        padding: 60px 30px;
        text-align: center;
    }
    .featured h3 {
        font-size: 28px;
        margin-bottom: 30px;
        color: #333;
    }
    .freelancers {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
    }
    .card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        width: 250px;
        padding: 20px;
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-8px);
    }
    .card img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
    }
    .card h4 {
        margin: 8px 0 5px;
        color: #ff6600;
    }
    .card p {
        font-size: 14px;
        color: #555;
    }
    footer {
        background: #333;
        color: white;
        text-align: center;
        padding: 15px;
        margin-top: 40px;
    }
    @media (max-width: 768px) {
        .freelancers { flex-direction: column; align-items: center; }
        .hero h2 { font-size: 30px; }
    }
</style>
<script>
function goToSignup() {
    window.location.href = "signup.php";
}
function goToLogin() {
    window.location.href = "login.php";
}
</script>
</head>
<body>

<header>
    <h1>PeoplePerHour Clone</h1>
    <nav>
        <button onclick="goToSignup()">Sign Up</button>
        <button onclick="goToLogin()">Login</button>
    </nav>
</header>

<section class="hero">
    <h2>Hire the Best Freelancers Online</h2>
    <p>Connect with talented professionals for any project, anytime.</p>
    <button onclick="goToSignup()">Get Started</button>
</section>

<section class="featured">
    <h3>Featured Freelancers</h3>
    <div class="freelancers">
        <div class="card">
            <img src="https://i.pravatar.cc/80?img=1" alt="Freelancer 1">
            <h4>Sarah Khan</h4>
            <p>Graphic Designer<br><b>$25/hr</b></p>
        </div>
        <div class="card">
            <img src="https://i.pravatar.cc/80?img=2" alt="Freelancer 2">
            <h4>Ali Ahmed</h4>
            <p>Web Developer<br><b>$30/hr</b></p>
        </div>
        <div class="card">
            <img src="https://i.pravatar.cc/80?img=3" alt="Freelancer 3">
            <h4>Maria Lopez</h4>
            <p>Content Writer<br><b>$20/hr</b></p>
        </div>
    </div>
</section>

<footer>
    © 2025 PeoplePerHour Clone | Designed by You 💻
</footer>

</body>
</html>
