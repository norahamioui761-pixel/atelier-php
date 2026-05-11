<?php
session_start();
if (!isset($_SESSION['auth'])) { 
    header("Location: acc.php"); 
    exit(); 
}

if (isset($_GET['action']) && $_GET['action'] == "clear") {
    unset($_SESSION['panier']);
    header("Location: panier.php");
    exit();
}

$total_global = 0;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Panier | Votre Marque</title>
    <style>
        :root { --dark: #0a192f; --gold: #c5a059; --light: #ccd6f6; --white: #ffffff; }
        body { font-family: 'Segoe UI', sans-serif; margin: 0; background-color: #112240; color: var(--light); padding-bottom: 100px; }
        header { background: var(--dark); padding: 15px 50px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 10px rgba(0,0,0,0.3); }
        .logo { color: var(--gold); font-size: 24px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; }
        nav a { color: var(--white); text-decoration: none; margin-left: 20px; font-size: 14px; }
        .container { width: 80%; margin: 50px auto; background: var(--dark); border-radius: 10px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.5); border: 1px solid rgba(197,160,89,0.2); }
        .cart-header { padding: 20px; border-bottom: 1px solid rgba(197,160,89,0.3); }
        .cart-header h2 { color: var(--gold); margin: 0; text-transform: uppercase; }
        table { width: 100%; border-collapse: collapse; text-align: left; }
        th { background: rgba(197, 160, 89, 0.1); color: var(--gold); padding: 15px; text-transform: uppercase; font-size: 13px; }
        td { padding: 20px 15px; border-bottom: 1px solid rgba(255,255,255,0.05); }
        .product-name { color: var(--white); font-weight: bold; }
        .price { color: var(--gold); font-weight: bold; }
        .total-section { padding: 30px; text-align: right; background: rgba(0,0,0,0.2); }
        .total-price { font-size: 28px; color: var(--gold); font-weight: 900; }
        .btn-group { display: flex; justify-content: space-between; padding: 20px; }
        .btn { padding: 12px 30px; border-radius: 4px; text-decoration: none; font-weight: bold; text-transform: uppercase; transition: 0.3s; cursor: pointer; }
        .btn-back { border: 1px solid var(--gold); color: var(--gold); }
        .btn-back:hover { background: rgba(197,160,89,0.1); }
        .btn-clear { background: #e74c3c; color: white; border: none; }
        .empty-msg { padding: 50px; text-align: center; color: var(--light); font-size: 18px; }
        footer { background: var(--dark); color: rgba(255,255,255,0.5); text-align: center; padding: 20px; font-size: 12px; }
    </style>
</head>
<body>
    <header>
        <div class="logo">VOTRE MARQUE .</div>
        <nav>
            <a href="ac.php">Store</a>
            <a href="panier.php?action=clear" style="color: #ff4d4d;">Vider le Panier</a>
        </nav>
    </header>

    <div class="container">
        <div class="cart-header">
            <h2>Récapitulatif de commande</h2>
        </div>

        <?php if (!empty($_SESSION['panier'])): ?>
            <table>
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Quantité</th>
                        <th>Prix Unitaire</th>
                        <th>Sous-total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['panier'] as $produit): 
                        $sous_total = $produit['price'] * $produit['qty'];
                        $total_global += $sous_total;
                    ?>
                    <tr>
                        <td class="product-name"><?php echo htmlspecialchars($produit['name']); ?></td>
                        <td><?php echo $produit['qty']; ?></td>
                        <td class="price"><?php echo $produit['price']; ?> DH</td>
                        <td class="price"><?php echo $sous_total; ?> DH</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="total-section">
                <span>TOTAL À PAYER :</span>
                <div class="total-price"><?php echo $total_global; ?> DH</div>
            </div>

            <div class="btn-group">
                <a href="ac.php" class="btn btn-back">← Continuer mes achats</a>
                <a href="panier.php?action=clear" class="btn btn-clear">Vider le panier</a>
            </div>

        <?php else: ?>
            <div class="empty-msg">
                <p>Votre panier est actuellement vide.</p>
                <a href="ac.php" class="btn btn-back">Retourner au Store</a>
            </div>
        <?php endif; ?>
    </div>

    <footer>VOTRE MARQUE LUXURY ©️ 2026 - Tous droits réservés</footer>
</body>
</html>