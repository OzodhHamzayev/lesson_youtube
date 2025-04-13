<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* CSS kodingizni shu yerga qo'ying */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html, body {
            display: grid;
            height: 100vh;
            width: 100%;
            place-items: center;
            background: linear-gradient(to right, hsl(0, 0%, 0%) 0%, #59012d 100%);
        }

        .container {
            background: #fff;
            max-width: 400px;
            width: 100%;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
        }

        .title {
            font-size: 30px;
            font-weight: 600;
            margin: 20px 0 10px 0;
            position: relative;
        }

        .input-box {
            width: 100%;
            height: 45px;
            margin-top: 25px;
            position: relative;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            outline: none;
            font-size: 16px;
            border: none;
            padding-left: 10px;
        }

        .input-box input[type="submit"] {
            width: 100%;
            background: linear-gradient(to right, #99004d 0%, #ff0080 100%);
            font-size: 17px;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            padding: 10px;
            border: none;
            transition: all 0.3s ease;
        }

        .input-box input[type="submit"]:hover {
            letter-spacing: 1px;
            background: linear-gradient(to left, #99004d 0%, #ff0080 100%);
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="#" method="post">
            <div class="title">Login</div>
            <div class="input-box">
                <input type="text" placeholder="Enter Your Email" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter Your Password" required>
            </div>
            <div class="input-box">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
