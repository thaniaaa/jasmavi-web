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
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        color: #fff;
    }

    .login-form {
        display: flex;
        flex-direction: column;
    }

    .login-form h2{
        display: flex;
        flex-direction: column;
        text-align: center;
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
        width: 100%;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.1s ease; /* Smooth transition */
    }

    button[type="submit"]:hover {
        background-color: #000066; /* Darker background on hover */
        transform: scale(1.05); /* Slightly enlarge the button */
        font-weight: bold;
    }

    button[type="submit"]:active {
        background-color: #1c5980; /* Even darker background on click */
        transform: scale(0.95); /* Slightly shrink the button */
    }

    button[type="submit"]:focus {
        outline: 2px solid #3498db; /* Add an outline for accessibility */
        outline-offset: 2px; /* Space between the button and outline */
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

    /* New styles for the link */
    .login-form a {
        color: #000066; /* Set the link color */
        text-decoration: none; /* Remove underline */
    }

    .login-form a:hover {
        color: #0000cc; /* Color change on hover */
        text-decoration: underline; /* Optional: Add underline on hover */
    }
</style>
</head>
<body>
    <!-- <div class="container">
        <div class="left-side">
            <img src="logo.png" alt="ClothCare Logo"> 
            <h1>JASMAVI</h1>
            <button class="login-button">LOGIN</button>
            <button class="signup-button">SIGN UP</button>
        </div> -->
        <div class="right-side">
            <div class="login-form">
                <h2>DAFTAR</h2>
                <div class="input-group">
                    <label for="username">Nama</label>
                    <input type="text" id="nama" name="nama">
                </div>
                <div class="input-group">
                    <label for="username">No Hp</label>
                    <input type="text" id="np hp" name="no hp">
                </div>
                <div class="input-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" name="password">
                    <p>Sudah punya akun? <a href='login'>Masuk </a><p>
                </div>
                <a href='login'>
                    <button type="submit">Daftar</button> 
                </a>
            </div>
        </div>
    </div>
</body>
</html>