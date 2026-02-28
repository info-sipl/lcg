<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>

    <style>
        body {
            background-color: cyan;
            font-family: Arial, sans-serif;
        }

        .login-box {
            width: 320px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 6px;
            box-shadow: 0 0 12px gray;
        }

        input,
        button {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }

        .captcha-box {
            font-weight: bold;
            background: #eee;
            text-align: center;
            letter-spacing: 4px;
            padding: 6px;
            margin-bottom: 5px;
        }

        .refresh-btn {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        .login-btn {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:disabled {
            background-color: gray;
            cursor: not-allowed;
        }
    </style>
</head>

<body>

    <form name="loginForm" method="POST" action="login.php" onsubmit="return validateForm()"  >
    
        <div class="login-box">
            <h3 align="center">Login</h3>
    
            <input type="text" id="username" name="username" placeholder="Username">
            <input type="password" id="password" name="password" placeholder="Password">
    
            <div class="captcha-box" id="captcha"></div>
            <button class="refresh-btn" type="button" onclick="generateCaptcha()">Refresh Captcha</button>
    
            <input type="text" id="captchaInput" placeholder="Enter Captcha">
    
            <button class="login-btn" id="loginBtn" name="login" type="submit" disabled>
                Login
            </button>
        </div>
    
    </form>

    <script>
        let captchaText = "";

        function generateCaptcha() {
            captchaText = Math.random().toString(36).substring(2, 7).toUpperCase();
            document.getElementById("captcha").innerText = captchaText;
            document.getElementById("captchaInput").value = "";
            document.getElementById("loginBtn").disabled = true;
        }

        generateCaptcha();

        document.getElementById("captchaInput").addEventListener("keyup", function () {
            let userCaptcha = this.value.toUpperCase();
            document.getElementById("loginBtn").disabled = userCaptcha !== captchaText;
        });

        function validateForm() {
            let user = document.getElementById("username").value.trim();
            let pass = document.getElementById("password").value.trim();
            let captchaVal = document.getElementById("captchaInput").value.trim();

            if (user === "" || pass === "" || captchaVal === "") {
                alert("All fields must be filled!");
                return false;
            }

            if (captchaVal.toUpperCase() !== captchaText) {
                alert("Captcha does not match!");
                generateCaptcha();
                return false;
            }

            alert("Login Successful!");
        }
    </script>

</body>

</html>