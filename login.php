<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #ff9a8b, #ff6a88, #dcb0ff); /* Soft pastel gradient */
        }

        .login-container {
            background: #ffffff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            width: 350px;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .login-container h2 {
            text-align: center;
            color: #ff6a88; /* Soft pink */
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 24px;
        }

        input {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: none;
            border-radius: 25px;
            background: #f5f5f5;
            color: #333;
            outline: none;
            transition: 0.3s;
        }

        input::placeholder {
            color: #aaa;
        }

        input:focus {
            background: #ffffff;
            border: 1px solid #ff6a88; /* Soft pink border */
            box-shadow: 0 0 8px rgba(255, 106, 136, 0.4);
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #ff6a88; /* Soft pink */
            border: none;
            border-radius: 25px;
            cursor: pointer;
            color: #fff;
            font-size: 16px;
            transition: background 0.3s, transform 0.3s;
        }

        .btn:hover {
            background: #ff4d6d; /* Darker pink on hover */
            transform: translateY(-2px);
        }

        .text-center {
            text-align: center;
            margin-top: 15px;
            color: #666;
            font-size: 14px;
        }

        .text-center a {
            color: #ff6a88;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .text-center a:hover {
            color: #ff4d6d; /* Darker pink on hover */
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="home.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">Login</button>
        </form>
        <p class="text-center">Don't have an account? <a href="index.php">Sign Up</a></p>
    </div>

</body>

</html>
