<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengajuan SKTM</title>
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
            height: 117vh;
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

        .content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-group label {
            width: 20%;
            font-size: 16px;
            color: #333;
        }

        .form-group input,
        .form-group textarea {
            width: 75%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group textarea {
            resize: none;
            height: 100px;
        }

        .form-group input[type="submit"] {
            width: auto;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile">
             <!--   <img src="user-icon.png" alt="User" class="profile-img">  Replace with your user icon -->
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
                    <h1>Formulir Pengajuan SKTM PENDIDIKAN</h1>
                </div>
            </header>

            <div class="content">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama Siswa</label>
                        <input type="text" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jenis-kelamin">Jenis Kelamin</label>
                        <input type="text" id="jenis-kelamin" name="jenis-kelamin">
                    </div>
                    <div class="form-group">
                        <label for="ttl">Tempat, Tgl Lahir</label>
                        <input type="text" id="ttl" name="ttl">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" id="status" name="status">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="nama-kk">Nama KK/Bapak</label>
                        <input type="text" id="nama-kk" name="nama-kk">
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <textarea id="keperluan" name="keperluan"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>