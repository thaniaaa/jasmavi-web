<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        .header-right a {
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s, color 0.3s;
        }

        .header-right a:hover {
            background-color: #c0392b; /* Darker red for hover effect */
        }

        .content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .request-summary {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .request-icon {
            width: 50px;
            margin-right: 20px;
        }

        .request-info h2 {
            margin-bottom: 5px;
            font-size: 20px;
            color: #333;
        }

        .request-info p {
            font-size: 24px;
            color: red;
        }

        .search-bar {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-bar input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .search-bar button {
            padding: 10px;
            background-color: #ddd;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .search-bar button img {
            width: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f4f4f4;
        }

        .btn-confirm {
            background-color: green;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Tambahan CSS untuk status dan konfirmasi */
        .status,
        .btn-confirm {
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            border: none;
            text-align: center;
            cursor: pointer;
            font-size: 14px;
        }

        .status.pending {
            background-color: red;
        }

        .status.selesai {
            background-color: green;
        }

        .btn-confirm {
            background-color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile">
               <!-- <img src="admin-icon.png" alt="Admin" class="profile-img">  Replace with your admin icon --> 
                <h2>ADMIN</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="dashboardadmin">Dashboard</a></li>
                    <li><a href="permintaansurat" class="active">Permintaan Surat</a></li>
                    <li><a href="suratselesai">Surat Selesai</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <div class="header-left">
                    <h1>Permintaan Surat</h1>
                </div>
                <div class="header-right">
                    <a href="reservation.html" class="logout-btn">Logout</a>
                </div>
            </header>

            <div class="content">
                <div class="request-summary">
                 <!--   <img src="request-icon.png" alt="Surat Permintaan" class="request-icon">  Replace with your request icon -->
                    <div class="request-info">
                    <!--    <h2>Surat Permintaan</h2> -->
                        <!--<p>3</p> -->
                    </div>
                </div>

                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Surat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>8201264793</td>
                            <td>Fulan Ahihihihi</td>
                            <td>Surat Pengantar</td>
                            <td><button class="status pending" onclick="toggleStatus(this)">Pending</button></td>
                            <td><button class="btn-confirm" onclick="confirmAction(this)">Konfirmasi</button></td>
                        </tr>
                        <tr>
                            <td>8201264793</td>
                            <td>Fulan Ahahaha</td>
                            <td>SKTM</td>
                            <td><button class="status pending" onclick="toggleStatus(this)">Pending</button></td>
                            <td><button class="btn-confirm" onclick="confirmAction(this)">Konfirmasi</button></td>
                        </tr>
                        <tr>
                            <td>8201264793</td>
                            <td>Fulan Ahehehe</td>
                            <td>Surat Pengantar</td>
                            <td><button class="status pending" onclick="toggleStatus(this)">Pending</button></td>
                            <td><button class="btn-confirm" onclick="confirmAction(this)">Konfirmasi</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function toggleStatus(element) {
            if (element.innerText === "Pending") {
                element.innerText = "Selesai";
                element.classList.remove("pending");
                element.classList.add("selesai");
            } else {
                element.innerText = "Pending";
                element.classList.remove("selesai");
                element.classList.add("pending");
            }
        }

        function confirmAction(button) {
            // Menghapus baris dari tabel
            var row = button.parentElement.parentElement;
            row.remove();
        }
    </script>

</body>

</html>
