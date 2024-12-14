<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chocolate Mousse - Details</title>
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
        <img src="PICS/AMERICANO.png" alt="Chocolate Mousse" class="details-img" />
        <div class="details-content">
          <h2>HOT / COLD AMERICANO</h2>
          <p>
            A classic coffee drink made with rich espresso and subtle bitterness to smooth, full-bodied flavor.
          </p>
          <p><strong>Price:</strong> ₱120</p>
          <form action="thank_you.php" method="POST">
            <div class="menu-buttons">
              <button type="submit" name="action" value="order_now"><a href="index.php">Order Now</button></a>
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