<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="INDEX">
<div class="background"></div>
<center>
    <form action="action.php" method="post">
        <h1>CONFIRM ORDER PRODUCT</h1>
		FULL NAME: <br> <input type="text" name="name" required /> <br><br>
        ADDRESS: <br> <input type="text" name="address" required /> <br><br>
        CONTACT NUMBER: <br> <input type="integer" name="number" required/> <br><br>
        VARIETY<br> <input type="number" name="variety" required /> <br><br>

		<!-- <input type="checkbox" id="terms" name="terms" required>Accept terms & condition.<br> -->
        <input type="submit"/>
    </form>
</center>
</div>
</body>
</html>