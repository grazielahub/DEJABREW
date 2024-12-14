<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="DETAILS.css" />
</head>
<body>
<header>
      <h1>CINNAMON</h1>
      <button class="back-button" onclick="window.location.href='pastry.php';">Back</button>
    </header>
    <div class="container">
      <main>
        <div class="details-container">
          <img
            src="pics/GLAZED.png"
            alt="CINNAMON"
            class="details-img"
          />
          <div class="details-content">
            <h2>Cinnamon Glazed</h2>
            <p>
                Soft, fluffy cinnamon roll smothered in a rich, sweet glaze and sprinkled with sugar.
            </p>
            <p><strong>Price:</strong> ₱85</p>
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