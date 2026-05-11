<?php
session_start();
// بدل ac.php ب acc.php باش ما يوقعش loop
if (!isset($_SESSION['auth'])) { 
    header("Location: acc.php"); 
    exit(); 
}

$prices = [
    'tshirts' => 199, 
    'hoodies' => 350, 
    'bag' => 150, 
    'cap' => 100
];

if (isset($_POST['add_to_panier'])) { 
    foreach($prices as $key => $price) {
        // هنا خاص اسم input يكون نفس $key
        $qty = isset($_POST[$key]) ? (int)$_POST[$key] : 0;
        if ($qty > 0) {
            $_SESSION['panier'][] = [
                'name' => ucfirst($key), 
                'price' => $price,
                'qty' => $qty
            ];
        }
    }
    header("Location: panier.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Store - E-Clothing</title>
    <style>
        :root { --dark: #0a192f; --gold: #c5a059; --light: #ccd6f6; --white: #ffffff; }
        body { font-family: 'Segoe UI', sans-serif; margin: 0; background-color: #112240; color: var(--light); padding-bottom: 80px; }
        header { background: var(--dark); padding: 15px 50px; display: flex; justify-content: space-between; align-items: center; }
        .logo { color: var(--gold); font-size: 24px; font-weight: bold; }
        .nav-right a { color: var(--white); text-decoration: none; margin-left: 20px; font-size: 13px; }
        .product-hero { background: white; padding: 40px; text-align: center; border-bottom: 2px solid var(--gold); }
        .product-hero img { width: 320px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .p-info { color: var(--dark); margin-top: 15px; }
        .p-info h3 { margin: 5px; font-size: 22px; }
        .p-info span { color: var(--gold); font-weight: bold; font-size: 20px; }
        .order-section { background: var(--dark); padding: 40px; width: 60%; margin: 30px auto; border-radius: 10px; border: 1px solid rgba(197,160,89,0.2); }
        .order-section h2 { color: var(--gold); text-align: center; margin-bottom: 30px; text-transform: uppercase; }
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; width: 90%; margin: auto; }
        label { color: var(--gold); font-size: 14px; font-weight: bold; margin-bottom: 5px; display: block; }
        input[type="number"] { width: 100%; padding: 12px; background: rgba(255,255,255,0.05); border: 1px solid rgba(197,160,89,0.3); color: white; border-radius: 4px; }
        .btn-box { text-align: center; margin-top: 40px; }
        .btn { padding: 15px 40px; border: 2px solid var(--gold); background: var(--gold); color: var(--dark); cursor: pointer; font-weight: bold; text-transform: uppercase; border-radius: 4px; }
        .btn:hover { background: transparent; color: var(--gold); }
        .btn-alt { background: transparent; color: var(--gold); margin-left: 10px; }
        footer { background: var(--dark); color: white; text-align: center; padding: 15px; position: fixed; bottom: 0; width: 100%; }
        .carousel-container { position: relative;height: 450px;overflow: hidden;}
        .carousel-item { position: absolute;width: 100%;opacity: 0;transition: opacity 1s ease-in-out;text-align: center;}
        .carousel-item.active {opacity: 1;position: relative;}
        .carousel-item img {width: 300px;border-radius: 10px;}
    </style>
</head>
<body>
    <header>
        <div class="logo">E-CLOTHING .</div>
        <div class="nav-right">
            <a href="acc.php">Accueil </a> <a href="ac.php">Store</a>
            <a href="panier.php">🛒 Panier</a> <a href="acc.php">Logout 🚪</a>
        </div>
    </header>

    <div class="product-hero">
    <div class="carousel-container">
        <div class="carousel-item active">
            <img src="/store/tee.jpeg" alt="Premium T-Shirt">
            <div class="p-info">
                <h3>T-Shirt Premium "Gold Edition"</h3>
                <span>199 DH</span>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/store/hoodie.jpeg" alt="Premium hoodie">
            <div class="p-info">
                <h3>Hoodie Premium "Gold Edition"</h3>
                <span>350 DH</span>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/store/bag.jpeg" alt="Premium bag">
            <div class="p-info">
                <h3>Bag Premium "Gold Edition"</h3>
                <span>150 DH</span>
            </div>
        </div>
    </div>
</div>

    <div class="order-section">
        <h2>Remplir Votre Panier</h2>
        <form method="post" action="ac.php">
            <div class="form-grid">
                <div class="group">
                    <label>T-shirts (Quantité):</label>
                    <input type="number" name="tshirts" value="0" min="0">
                </div>
                <div class="group">
                    <label>Hoodies (Quantité):</label>
                    <input type="number" name="hoodies" value="0" min="0">
                </div>
                <div class="group">
                    <label>Bag (Quantité):</label>
                    <input type="number" name="bag" value="0" min="0"> <!-- كان pantalons -->
                </div>
                <div class="group">
                    <label>Cap (Quantité):</label>
                    <input type="number" name="cap" value="0" min="0"> <!-- كان vestes -->
                </div>
            </div>
            <div class="btn-box">
                <button type="submit" name="add_to_panier" class="btn">Ajouter au panier</button>
                <button type="reset" class="btn btn-alt">Annuler</button>
            </div>
        </form>
    </div>
    <footer>E-CLOTHING . | Excellence in Style</footer>
</body>
</html>