<!DOCTYPE html>
<html>
<head>
<title>JASMAVI</title>
<style>
    body {
        font-family: sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f0f0f0; 
    }

    .container {
        display: flex;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .left-side {
        width: 400px;
        padding: 40px;
        background-color: #f0f0f0; 
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        text-align: center;
    }

    .right-side {
        width: 400px;
        padding: 40px;
        background-color: #2980b9; 
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        color: #fff;
    }

    .login-form {
        display: flex;
        flex-direction: column;
    }

    .input-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button[type="submit"] {
        background-color: #3498db;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .login-button, .signup-button {
        background-color: #2980b9; 
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px; 
    }
</style>
</head>
<body>
    <div class="container">
        <div class="left-side">
            <img src="logo.png" alt="ClothCare Logo"> 
            <h1>JASMAVI</h1>
            <button class="login-button"><a href='dashboarduser'>LOGIN</a></button>
            <button class="signup-button"><a href='dashboardadmin'>SIGN UP</a></button>
        </div>
        <div class="right-side">
            <div class="login-form">
                <h2>Login</h2>
                <div class="input-group">
                    <label for="username">No HP</label>
                    <input type="text" id="np hp" name="no hp">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <button type="submit">LOGIN</button> 
            </div>
        </div>
    </div>
</body>
</html>