<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="DETAILS.css" />
</head>
<body>
<header>
      <h1>S'MORES</h1>
      <button class="back-button" onclick="window.location.href='pastry.php';">Back</button></a> 
    </header>
    <div class="container">
      <main>
        <div class="details-container">
          <img
            src="pics/OVERLOAD.png"
            alt="SMORES"
            class="details-img"
          />
          <div class="details-content">
            <h2>S'MORES OVERLOAD</h2>
            <p>
                The ultimate indulgence of toasty marshmallow fluff, crunchy graham cracker that rich of chocolate with drizzle.
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