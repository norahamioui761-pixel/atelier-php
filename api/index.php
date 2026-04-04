
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Noura</title>

    <!-- CSS داخلي -->
    <style>
    /* ====== Reset & Base ====== */
    * { margin:0; padding:0; box-sizing:border-box; }
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,0.9)), url("background.jpeg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: #ccc;
        scroll-behavior: smooth;
    }

    /* ===== Navbar ===== */
    .navbar {
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:20px 50px;
        background: rgba(0,0,0,0.3);
        backdrop-filter: blur(5px);
    }
    .logo { font-weight:bold; font-size:1.2rem; color:#ccc; }
    .logo samp { color:#d112d1; }
    .code-brackets { color:#d112d1; font-family:'Courier New', monospace; font-weight:900; margin-right:5px; }
    .nav-links { display:flex; list-style:none; gap:20px; }
    .nav-links a { text-decoration:none; color:#ccc; font-size:0.9rem; transition:0.3s; }
    .nav-links a:hover { color:#d112d1; }

    /* ===== Hero Section ===== */
    .hero-section .container {
        display:flex;
        justify-content:space-around;
        align-items:center;
        height: calc(100vh - 80px);
        padding:0 10%;
    }
    .content h1 { font-size:3.5rem; margin-bottom:15px; letter-spacing:2px; }
    .tag {
        background: rgba(209,18,209,0.1);
        padding:10px 20px;
        border-radius:5px;
        border-left:4px solid #d112d1;
        color:#f0a3f0;
        font-family:'Courier New', monospace;
        display:inline-block;
        margin-bottom:30px;
    }
    .tag span { animation: blink 1s infinite; }
    @keyframes blink { 50% { opacity:0; } }

    .buttons { display:flex; gap:15px; }
    .btn { padding:12px 25px; text-decoration:none; border-radius:5px; font-weight:bold; font-size:0.9rem; transition:0.3s; }
    .btn-cv { background-color:#d112d1; color:white; box-shadow:0 4px 15px rgba(209,18,209,0.4); }
    .btn-cv:hover { background-color:#f032f0; }

    /* ===== Profile Card ===== */
    .profile-card {
        background:#1a051d;
        border:1px solid #3d1044;
        border-radius:10px;
        overflow:hidden;
        width:300px;
        box-shadow:0 20px 40px rgba(0,0,0,0.6);
    }
    .card-header { background:#2d0a33; padding:8px 15px; font-size:0.8rem; color:#a580ad; border-bottom:1px solid #3d1044; }
    .card-body img { width:100%; height:auto; display:block; filter:grayscale(20%); }

    /* ===== About Section ===== */
    .about-section { padding:100px 10%; background:#0b020c; }
    .section-title { color:#d112d1; font-size:2.2rem; margin-bottom:40px; position:relative; }
    .section-title::after { content:''; display:block; width:60px; height:4px; background:#d112d1; margin-top:10px; }
    .about-card {
        background: rgba(26,5,29,0.5);
        padding:40px;
        border-radius:15px;
        border:1px solid rgba(209,18,209,0.2);
        line-height:1.8;
        font-size:1.1rem;
        color:#e0e0e0;
    }
    .about-card strong { color:#d112d1; }
    .status-indicator { margin-top:25px; display:flex; align-items:center; gap:10px; font-size:0.9rem; color:#a580ad; }
    .dot { height:10px; width:10px; background-color:#2ecc71; border-radius:50%; display:inline-block; box-shadow:0 0 8px #2ecc71; }

    /* ===== Projects Section ===== */
    .projects-hero {
        min-height:100vh;
        padding:120px 5% 50px;
        display:flex;
        flex-direction:column;
        align-items:center;
        background: linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,0.9)), url('background.jpeg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    .hero-title { text-align:center; margin-bottom:60px; }
    .hero-title h1 { font-size:4rem; color:#ecbbec; letter-spacing:5px; line-height:1.1; }
    .underline { width:80px; height:5px; background:#d112d1; margin:20px auto; box-shadow:0 0 15px #d112d1; }
    .projects-container { display:flex; flex-wrap:wrap; justify-content:center; gap:30px; width:100%; max-width:1200px; }
    .project-card {
        background: rgba(26,5,29,0.8);
        border:1px solid rgba(209,18,209,0.3);
        border-radius:20px;
        padding:40px;
        width:350px;
        text-align:center;
        backdrop-filter: blur(10px);
        transition: all 0.4s ease;
    }
    .project-card:hover { transform:translateY(-15px); border-color:#d112d1; box-shadow:0 0 30px rgba(209,18,209,0.3); background: rgba(26,5,29,0.95);}
    .card-icon img { width:80px; height:80px; background-color:#fff; border-radius:50%; mix-blend-mode: lighten; border:2px solid #d112d1; box-shadow:0 0 15px rgba(209,18,209,0.6); object-fit:contain; padding:5px; }
    .project-card h3 { color:white; font-size:1.5rem; margin-bottom:15px; }
    .project-card p { color:#ccc; font-size:0.9rem; margin-bottom:30px; }
    .card-buttons { display:flex; gap:15px; }
    .btn-main { flex:1; background:#d112d1; color:white; padding:10px; text-decoration:none; border-radius:8px; font-weight:bold; font-size:0.85rem; }
    .btn-sub { flex:1; border:1px solid #d112d1; color:#d112d1; padding:10px; text-decoration:none; border-radius:8px; font-weight:bold; font-size:0.85rem; }
    .btn-main:hover { box-shadow:0 0 15px #d112d1; }

    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="logo"><span class="code-brackets">&lt;/&gt;</span> <samp> NOURA </samp>EL HAMIOUI</div>
  <ul class="nav-links">
    <li><a href="#accueil">Accueil</a></li>
    <li><a href="#about">À propos</a></li>
    <li><a href="#projects">Projets</a></li>
  </ul>
</nav>

<!-- ACCUEIL -->
<section id="accueil" class="hero-section">
    <div class="container">
        <div class="content">
            <h1>NOURA EL HAMIOUI</h1>
            <div class="tag">&lt; Étudiante en Développement Web <span>|</span> /&gt;</div>
            <div class="buttons"><a href="#projects" class="btn btn-cv">Mes Projets</a></div>
        </div>
        <div class="profile-card">
            <div class="card-header">Mon profil ❤️</div>
            <div class="card-body"><img src="my image.jpeg" alt="Profile"></div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="about-section">
    <div class="container">
        <h2 class="section-title">À propos de moi</h2>
        <div class="about-card">
            <p>Je suis étudiante en <strong>première année à ISMONTIC Tanger</strong> et passionnée par le développement web.</p>
            <p>Curieuse et enthousiaste, je m'efforce constamment de me tenir au courant des dernières technologies.</p>
            <div class="status-indicator"><span class="dot"></span> Open to new opportunities</div>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="projects-hero">
    <div class="hero-title">
        <h1>&lt; MES PROJETS /&gt;</h1>
        <div class="underline"></div>
    </div>

    <div class="projects-container">
        <div class="project-card">
            <div class="card-icon"><img src="logo.jpeg" alt="PHP"></div>
            <h3><b>Atelier 1 :</b></h3>
            <p>Maitrise des boucles et tableaux.</p>
            <div class="card-buttons">
                <?php
                echo '<a href="ex1.php" class="btn-main">Code Source</a>';
                echo '<a href="Exe1.pdf" class="btn-sub">Rapport</a>';
                ?>
            </div>
        </div>

        <div class="project-card">
            <div class="card-icon"><img src="logo.jpeg" alt="PHP"></div>
            <h3>Atelier 2 : Authentification</h3>
            <p>Système de connexion sécurisé avec sessions PHP.</p>
            <div class="card-buttons">
                <?php
                echo '<a href="ex2.php" class="btn-main">Code Source</a>';
                echo '<a href="Exe2.pdf" class="btn-sub">Rapport</a>';
                ?>
            </div>
        </div>
    </div>
</section>

</body>
</html>