<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALMOND</title>
    <link rel="stylesheet" href="DETAILS.css" />
</head>
<body>
    <header>
      <h1>CROISSANT</h1>
      <button class="back-button" onclick="window.location.href='pastry.php';">Back</button>
    </header>
    <div class="container">
      <main>
        <div class="details-container">
          <img
            src="pics/ALMOND BLISS.png"
            alt="Cinnamon Almond Bliss"
            class="details-img"
          />
          <div class="details-content">
            <h2>Croissant Almond Bliss</h2>
            <p>
                Flaky, buttery croissant filled with sweet almond cream, topped with sliced almonds and a hint of vanilla.
            </p>
            <p><strong>Price:</strong> ₱85</p>
            <form action="thank_you.php" method="POST">
              <div class="menu-buttons">
       
                <button type="submit" name="action" value="order_now"><a href="FUNCTION/index.php"> Now</button></a>
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