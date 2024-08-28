<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 335px;
            background-color: #2c3e50;
            color: white;
            height: 100vh; /* Menyesuaikan tinggi sidebar */
            padding: 20px;
            box-sizing: border-box;
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
            list-style: none;
            padding: 0;
        }

        .sidebar nav ul li {
            margin: 10px 0;
        }

        .sidebar nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, padding-left 0.3s;
        }

        .sidebar nav ul li a.active,
        .sidebar nav ul li a:hover {
            background-color: #34495e;
            padding-left: 20px;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
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

        .header-right button:hover {
            background-color: #c0392b;
        }

        .content {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: inline-block;
            min-width: calc(50% - 20px);
            max-width: calc(50% - 20px);
            box-sizing: border-box;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card h3 {
            margin-top: 0;
            color: #333;
        }

        .card p {
            color: #666;
        }

        .card a {
            text-decoration: none;
            color: inherit;
            display: block;
            height: 100%;
            width: 100%;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile">
             <!--   <img src="admin-icon.png" alt="User" class="profile-img">  Replace with your admin icon -->
                <h2>PENGGUNA</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="dashboarduser">Dashboard</a></li>
                    <li><a href="sktm" class="active">Pengajuan SKTM</a></li>
                    <li><a href="suratpengantar">Surat Pengantar</a></li>
                    <li><a href="reservation.html">Logout</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <div class="header-left">
                    <h1>Surat Keterangan Tidak Mampu</h1>
                </div>
                <div class="header-right">
                    <a href='reservation.html'>
                        <button>Logout</button>
                    </a>
                </div>
            </header>

            <div class="content">
                <div class="card">
                    <a href="/sktmkesehatan">
                        <h3>SKTM Kesehatan</h3>
                        <p>Formulir untuk mengajukan Surat Keterangan Tidak Mampu (SKTM) untuk keperluan kesehatan.</p>
                    </a>
                </div>
                <div class="card">
                    <a href="/sktmpendidikan">
                        <h3>SKTM Pendidikan</h3>
                        <p>Formulir untuk mengajukan Surat Keterangan Tidak Mampu (SKTM) untuk keperluan pendidikan.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
