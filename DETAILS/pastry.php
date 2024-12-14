<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Navigation</title>
    <link rel="stylesheet" href="pastry.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="pics/DEJA BREW LOGO.png" alt="Logo" class="logo-image">
            <span class="site-name">DEJA-BREW</span>    
        </div>
    <div>
        <nav class="nav-links">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="DRINKS.php">Drinks</a></li>
                <li><a href="pastry.php">Pastry</a></li>
            </ul>
        </nav>
    </div>
    </header><br><br>
    
  
  <div class="Description">
      <img src="pics/Menu.png" alt="Avatar" class="image">
      <div class="middle">
          <div class="text">
              <p>Indulge in our artisan pastries, crafted daily with premium ingredients for a melt-in-your-mouth experience. From flaky croissants to rich Danish delights, each bite offers a perfect balance of texture and flavor. Treat yourself to the perfect pairing of sweetness and sophistication.</p>
          </div>
      </div>
  </div>
  
  <div class="Pastry">
      <div class="Croissant">
        <a href="#croissant">
          <center>
              <label><h2>Croissant</h2></label></a>
          </center>
      </div>
      <div class="Cinnamon">
        <a href="#cinnamon">
          <center>
              <label><h2>Cinnamon Roll</h2></label></a>
          </center>
      </div>
      <div class="Smores">
        <a href="#smores">
          <center>
              <label><h2>S'mores</h2></label></a>
          </center>
      </div>
  </div><br><br>
  
</header><br><br>
<body>

    <section class="menu-section">
        <div class="menu-container">
          <div class="menu" id="croissant">
            <a href="glazed.php">
            <img src="pics/GLAZED.png" alt=""></a>
            <h4>CINNAMON GLAZED</h4>
            <div class="menu-buttons">
             
              <button class="btn-order">Order Now</button>
            </div>
          </div>
      
          <div class="menu" id="cinnamon">
            <a href="nutella.php">
            <img src="pics/NUTELLA.png" alt=""></a>
            <h4>CROISSANT NUTELLA</h4></a>
            <div class="menu-buttons">
              <button class="btn-order">Order Now</button>
            </div>
          </div>
      
          <div class="menu" id="smores">
            <a href="smore.php">
            <img src="pics/COOKIE.png" alt=""></a>
            <h4>S'MORES COOKIE</h4>
            <div class="menu-buttons">
          
              <button class="btn-order">Order Now</button>
            </div>
          </div>
        </div>
      </section>
  
  <section class="menu-section">
    <div class="menu-container">
      <div class="menu">
        <a href="apple.php">
        <img src="pics/APPLE PIE.png" alt="">
        <h4>CINNAMON APPLE PIE</h4></a>
        <div class="menu-buttons">

          <button class="btn-order">Order Now</button>
        </div>
      </div>

      <div class="menu">
        <a href="almond.php">
        <img src="pics/ALMOND BLISS.png" alt="">
        <h4>CROISSANT ALMOND BLISS</h4></a>
        <div class="menu-buttons">

          <button class="btn-order">Order Now</button>
        </div>
      </div>

      <div class="menu">
        <a href="overload.php">
        <img src="pics/OVERLOAD.png" alt=""></a>
        <h4>S'MORE OVERLOAD</h4>
        <div class="menu-buttons">
    
          <button class="btn-order">Order Now</button>
        </div>
      </div>
    </div>
  </section>
    </body>
    <footer>
        <center>&copy; 2024 Deja Brew. All Rights Reserved.</center>
      </footer>
</html>