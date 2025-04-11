<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6c5ce7, #00b894);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: bold;
        }

        label {
            font-size: 14px;
            color: #333;
            margin-bottom: 8px;
            display: inline-block;
            text-align: left;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 14px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #6c5ce7;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 14px;
            background-color: #6c5ce7;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #5e4bc1;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }

        .footer a {
            color: #6c5ce7;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .btn-link {
            background-color: transparent;
            color: #6c5ce7;
            border: none;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 24px;
            }

            input[type="text"], input[type="password"], input[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Welcome Back!</h2>
        <form action="signin_process.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" placeholder="Enter your username" required><br>
            </div>
            <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" placeholder="Enter your password" required><br><br>
            </div>
            <input type="submit" value="Sign In">
        </form>
        <div class="footer">
            <p>Don't have an account? <a href="#" class="btn-link">Sign Up</a></p>
        </div>
    </div>

</body>
</html>
