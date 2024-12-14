<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="DETAILS.css" />
</head>
<body>
<header>
      <h1>COFFEE</h1>
      <button class="back-button" onclick="window.location.href='DRINKS.php';">Back</button>
    </header>
    <div class="container">
      <main>
        <div class="details-container">
          <img
            src="PICS/CAPPUCCINO.png"
            alt="Chocolate Mousse"
            class="details-img"
          />
          <div class="details-content">
            <h2>HOT / COLD CAPPUCCINO</h2>
            <p>
                Rich espresso, steamed milk, and frothed milk, perfectly balanced in every cup.
            </p>
            <p><strong>Price:</strong> ₱120</p>
            <form action="thank_you.php" method="POST">
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