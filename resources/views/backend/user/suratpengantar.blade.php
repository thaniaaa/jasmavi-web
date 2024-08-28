<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengajuan Surat Pengantar</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            padding: 20px;
            height: 100vh;
            position: fixed;
            left: 0;
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
            margin-left: 150px;
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
            font-weight: bold; /* Make the text bold */
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
                <img src="profile.jpg" alt="Profile Picture" class="profile-img">
                <h2>User</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="dashboarduser">Dashboard</a></li>
                    <li><a href="sktm">Pengajuan SKTM</a></li>
                    <li><a href="suratpengantar" class="active">Surat Pengantar</a></li>
                    <li><a href="reservation.html">Logout</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <div class="header-left">
                    <h1>Formulir Pengajuan Surat Pengantar</h1>
                </div>
            </header>

            <div class="content">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="full-name">Nama Lengkap</label>
                        <input type="text" id="full-name" name="full-name">
                    </div>
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                        <input type="text" id="gender" name="gender">
                    </div>
                    <div class="form-group">
                        <label for="birth-place">Tempat, Tanggal Lahir</label>
                        <input type="text" id="birth-place" name="birth-place">
                    </div>
                    <div class="form-group">
                        <label for="religion">Agama</label>
                        <input type="text" id="religion" name="religion">
                    </div>
                    <div class="form-group">
                        <label for="nationality">Kewarganegaraan</label>
                        <input type="text" id="nationality" name="nationality">
                    </div>
                    <div class="form-group">
                        <label for="occupation">Pekerjaan</label>
                        <input type="text" id="occupation" name="occupation">
                    </div>
                    <div class="form-group">
                        <label for="marital-status">Status Perkawinan</label>
                        <input type="text" id="marital-status" name="marital-status">
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat Tinggal</label>
                        <input type="text" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="purpose">Keperluan</label>
                        <textarea id="purpose" name="purpose"></textarea>
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
