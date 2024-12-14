<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="DETAILS.css" />
</head>
<body>
<header>
      <h1>BEST CINNAMON PASTRY</h1>
      <button class="back-button" onclick="window.location.href='HOME.php';">Back</button>
    </header>
    <div class="container">
      <main>
        <div class="details-container">
          <img
            src="PICS/APPLE PIE.png"
            alt="Chocolate Mousse"
            class="details-img"
          />
          <div class="details-content">
            <h2>APPLE PIE CINNAMON ROLL</h2>
            <p>
              Sweet, spiced apple filling paired with the warmth of cinnamon, all wrapped in a flaky crust.
            </p>
            <p><strong>Price:</strong> ₱120</p>
            <form action=".php" method="POST">
              <div class="menu-buttons">
              
                <button type="submit" name="action" value="order_now">Order Now</button>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
    <footer>
      <p>&copy; 2024 Deja Brew. All Rights Reserved.</p>
    </footer>
</body>
</html>