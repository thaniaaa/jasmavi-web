<!DOCTYPE html>
<html>
<head>
<title>JASMAVI</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    body {
        font-family: sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f0f0f0; 
        flex-direction: column;
    }
    .container {
        display: flex;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .alert {
        max-width: 400px;
        min-width: 400px;
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

    .login-form h2 {
        text-align: center;
        text-decoration: none;
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
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show notify" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show notify" role="alert">
        {{ session('loginError') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div>
        <!-- <div class="left-side">
            <img src="logo.png" alt="ClothCare Logo"> 
            <h1>JASMAVI</h1>
            <button class="login-button"><a href='dashboarduser'>LOGIN</a></button>
            <button class="signup-button"><a href='dashboardadmin'>SIGN UP</a></button> 
        </div> -->
        <form action="/login" method="POST">
            @csrf
            <div class="right-side"> 
                <div class="login-form">
                    <h2>MASUK</h2>
                    <div class="input-group">
                        <label for="nomor_telepon">No Hp</label>
                        <input type="text" id="nomor_telepon" name="nomor_telepon" class="@error('nomor_telepon') is-invalid @enderror" value="{{ old('nomor_telepon') }}">
                        @error('nomor_telepon')
                        <div class="invalid-feedback" style="margin-top: 10px; display:block; color:white;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror" value="{{ old('password') }}">
                        <p>Belum punya akun? <a href='register'>Daftar</a></p>
                    </div>
                        <a href='dashboarduser'>
                            <button type="submit">Masuk</button>
                        </a> 
                    </div>
                </div>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
