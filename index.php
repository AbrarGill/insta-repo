<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
            background: linear-gradient(135deg, #74ebd5, #9face6); /* Soft blue gradient */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .signup-container {
            background: #ffffff; /* White background for the form */
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            width: 350px;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .signup-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #4c5c68; /* Soft dark gray */
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 12px;
            border: 1px solid #ddd;
            background: #f5f5f5;
            color: #333;
            outline: none;
            transition: border 0.3s, background 0.3s;
        }

        input::placeholder {
            color: #aaa;
        }

        input:focus {
            border: 1px solid #6c63ff; /* Soft purple on focus */
            background: #fff;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #6c63ff; /* Purple button */
            border: none;
            color: #fff;
            border-radius: 12px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s, transform 0.3s;
        }

        .btn:hover {
            background: #5a54e6; /* Darker purple on hover */
            transform: translateY(-2px);
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #777; /* Light gray text */
        }

        .login-link a {
            color: #6c63ff; /* Purple link */
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .login-link a:hover {
            color: #5a54e6; /* Darker purple on hover */
        }
    </style>
</head>

<body>

    <div class="signup-container">
        <h2>Create Account</h2>
        <form action="#" method="post">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm-password" placeholder="Confirm Password" required>
            <button type="submit" class="btn">Sign Up</button>
        </form>
        <p class="login-link">Already have an account? <a href="login.php">Log In</a></p>
    </div>

</body>

</html>
