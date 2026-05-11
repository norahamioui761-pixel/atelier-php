<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "admin" && $pass == "1234") {
        $_SESSION['auth'] = true;
        header("Location: ac.php"); // بدل store.php ب ac.php
        exit(); // ديما دير exit بعد header
    } else { 
        $error = "Informations incorrectes !"; 
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>E-Clothing | Authentification</title>
    <style>
        :root { --dark: #0a192f; --gold: #c5a059; --light: #ccd6f6; --white: #ffffff; }
        body { font-family: 'Segoe UI', sans-serif; margin: 0; background-color: #112240; color: var(--light); }
        header { background: var(--dark); color: var(--white); padding: 15px 50px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 10px rgba(0,0,0,0.3); }
        .logo { color: var(--gold); font-size: 26px; font-weight: bold; letter-spacing: 2px; }
        nav a { color: var(--white); text-decoration: none; margin-left: 20px; font-size: 14px; text-transform: uppercase; }
        .hero { background: var(--white); padding: 50px; display: flex; align-items: center; justify-content: center; border-bottom: 3px solid var(--gold); }
        .hero-text { font-size: 45px; color: var(--dark); font-weight: 900; margin-right: 50px; line-height: 1.1; }
        .hero-text span { color: var(--gold); }
        .hero img { width: 380px; border-radius: 5px; box-shadow: 10px 10px 0px var(--gold); }
        .login-section { background: var(--dark); padding: 40px; width: 50%; margin: 40px auto; border-radius: 8px; box-shadow: 0 15px 35px rgba(0,0,0,0.5); }
        .login-section h2 { color: var(--gold); text-align: center; text-transform: uppercase; margin-bottom: 30px; }
        .form-group { width: 85%; margin: 15px auto; }
        label { color: var(--gold); display: block; margin-bottom: 5px; font-size: 13px; font-weight: bold; }
        input { width: 100%; padding: 12px; border: 1px solid rgba(197,160,89,0.3); border-radius: 4px; background: rgba(255,255,255,0.05); color: white; box-sizing: border-box; }
        .buttons { text-align: center; margin-top: 30px; }
        .btn { padding: 12px 35px; border: 2px solid var(--gold); background: none; color: var(--gold); cursor: pointer; font-weight: bold; text-transform: uppercase; transition: 0.4s; }
        .btn-connexion { background: var(--gold); color: var(--dark); margin-right: 10px; }
        .btn-connexion:hover { background: transparent; color: var(--gold); }
        footer { background: var(--dark); color: white; text-align: center; padding: 20px; position: fixed; bottom: 0; width: 100%; font-size: 12px; letter-spacing: 1px; }
    </style>
</head>
<body>
    <header>
        <div class="logo">E-CLOTHING .</div>
        <nav><a href="ac.php">Store</a> <a href="acc.php">Accueil</a></nav>
    </header>

    <div class="hero">
        <div class="hero-text">Luxury Fashion<br><span>E-Clothing.</span></div>
        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=600" alt="Fashion Brand">
    </div>

    <div class="login-section">
        <h2>Espace Client</h2>
        <form method="post">
            <div class="form-group">
                <label>Se Connecter</label>
                <input type="text" name="username" placeholder="admin" required>
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="1234" required>
            </div>
            <div class="buttons">
                <button type="submit" name="login" class="btn btn-connexion">Connexion</button>
                <button type="reset" class="btn">Annuler</button>
            </div>
        </form>
        <?php if(isset($error)) echo "<p style='color:red; text-align:center;'>$error</p>"; ?>
    </div>
    <footer>E-CLOTHING LUXURY STORE ©️ 2026</footer>
</body>
</html>