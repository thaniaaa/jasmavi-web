<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            height: 100vh;
            padding: 20px;
        }

        .profile {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .profile h2 {
            font-size: 20px;
            font-weight: bold;
        }

        .sidebar nav ul {
            list-style-type: none;
        }

        .sidebar nav ul li {
            margin: 10px 0;
        }

        .sidebar nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px 0;
        }

        .sidebar nav ul li a.active {
            background-color: #34495e;
            padding-left: 10px;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header-left h1 {
            font-size: 24px;
            color: #333;
        }

        .header-right button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        .content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .cards {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 48%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card h3 {
            font-size: 20px;
            color: #333;
        }

        .card span {
            font-size: 24px;
            font-weight: bold;
            color: red;
        }

        .logo-box {
            background-color: #ddd;
            padding: 100px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-box h2 {
            font-size: 36px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile">
                <img src="admin-icon.png" alt="Admin" class="profile-img"> <!-- Replace with your admin icon -->
                <h2>ADMIN</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="active">Dashboard</a></li>
                    <li><a href="#">Permintaan Surat</a></li>
                    <li><a href="#">Surat Selesai</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <div class="header-left">
                    <h1>Dashboard</h1>
                </div>
                <div class="header-right">
                    <button>Logout</button>
                </div>
            </header>

            <div class="content">
                <div class="cards">
                    <div class="card">
                        <h3>Surat Permintaan</h3>
                        <span>3</span>
                    </div>
                    <div class="card">
                        <h3>Surat Selesai</h3>
                        <span>7</span>
                    </div>
                </div>
                <div class="logo-box">
                    <h2>LOGO</h2>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
