<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background: #1B2223;
        }
        .login-frame {
            position: absolute;
            width: 438px;
            height: 357px;
            left: 501px;
            top: 350px;
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(63, 61, 86, 0.2);
            border-radius: 20px;
        }
        .title {
            position: absolute;
            width: 153px;
            height: 54px;
            left: 644px;
            top: 244px;
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            font-size: 40px;
            line-height: 54px;
            color: #FFFFFF;
        }
        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 20px;
        }
        .form-title {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            font-size: 32px;
            line-height: 48px;
            text-align: center;
            color: #1B2223;
            width: 89px;
            height: 48px;
            margin-bottom: 30px;
        }
        .form-input {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 14px;
            line-height: 21px;
            text-align: center;
            color: #135589;
            width: 100%;
            height: 30px;
            margin-bottom: 10px;
            border: none;
            background-color: #F5F5F5;
            border-radius: 10px;
            padding: 5px;
        }
        .form-input:focus {
            outline: none;
            background-color: #E5E5E5;
        }
        .form-input::placeholder {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 14px;
            line-height: 21px;
            text-align: center;
            color: #C4C4C4;
        }
        .submit-button {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            font-size: 16px;
            line-height: 24px;
            color: #FFFFFF;
            background-color: #135589;
            border: none;
            border-radius: 20px;
            width: 246px;
            height: 40px;
            cursor: pointer;
            margin-top: 20px;
        }
        .submit-button:hover {
            background-color: #0F476E;
        }
    </style>
</head>
<body>
    <div class="login-frame">
        <div class="login-form">
            <div class="form-title">Login</div>
            <input type="text" class="form-input" placeholder="Username/Email">
            <input type="password" class="form-input" placeholder="Password">
            <button type="submit" class="submit-button">Masuk</button>
        </div>
    </div>
    <div class="title">APERGA</div>
</body>
</html>
