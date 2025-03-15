<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
           background: radial-gradient(circle, #0E1A40, #191970);


        }
        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            width: 350px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #fff;
        }
        .input-group {
            margin-bottom: 15px;
            text-align: left;

        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            outline: none;
        }
        .login-btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #4c51bf;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        .login-btn:hover {
            background: #3c4b9e;
        }
        .forgot-password {
            margin-top: 10px;
            color: white;
            font-size: 14px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="{{route('loginProses')}}" method="post">
            @csrf
            <div class="input-group">
                <label style="color: white"  for="">Email :</label>
                <input type="email" name="email" placeholder="Masukkan Email Anda" required>
            </div>
            <div class="input-group">
                <label style="color: white" for="" >Password :</label>
                <input type="password" name="password" placeholder="Masukkan Password Anda" required>
            </div>
            <button class="login-btn" type="submit">Login</button>
        </form>
</body>
</html>
