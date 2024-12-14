<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN/SIGNUP - DEJA BREW</title>
    <style>
        body {
            background: url('PICS/BGPIC.jfif') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;    
        }

        body::before {
            margin-top: 1px;
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.2);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(5px);
            border-bottom: 5px solid #f7d39a;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo h3 {
            color: white;
            font-size: 18px;
        }

        .logo-image {
            width: 60px;
            height: auto;
            margin-right: 10px;
        }

        .deja {
            font-size: 19px;
            font-weight: bold;
        }

        .nav-links ul {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #f7d39a;
        }

        .container {
            margin: 100px auto;
            max-width: 500px;
            padding: 40px;
            background-color: #D8D2C2; /* Light beige for the container */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(172, 136, 97, 0.4);
            backdrop-filter: blur(10px);
            text-align: center;
            font-family: 'Arial', sans-serif;
        }

        h2 {
            color: #4A4947;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form input {
            display: block;
            width: 80%;
            margin: 10px 0;
            padding: 12px;
            border: 1px solid #B17457; 
            border-radius: 4px;
            background-color: #FAF7F0;
            color: #4A4947;
            font-size: 16px;
        }

        button {
            background-color: #B17457; 
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 80%;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #4A4947; /* Dark gray for button hover */
            transform: scale(1.05);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }

            .nav-links ul {
                flex-direction: column;
            }

            .nav-links li {
                margin: 10px 0;
            }

            .container {
                max-width: 90%;
                padding: 20px;
            }

            form input, button {
                width: 90%; /* Ensure form elements fit the screen */
            }
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img class="logo-image" src="PICS/DEJA BREW LOGO.png" alt="Deja Brew Logo">
            <h3><span class="deja">WELCOME TO DEJA-BREW</span></h3>
        </div>
        <nav class="nav-links">
            <ul>
                <li><a href="HOME.php">Home</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Login</button>
        </form>

        <h2>Register</h2>
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit"><a href="homee.php">Register</a></button>
        </form>
    </div>
</body>
</html>
