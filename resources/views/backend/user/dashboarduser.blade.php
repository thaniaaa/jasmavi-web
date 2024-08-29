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
        }

        .container {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .sidebar {
            width: 300px;
            background-color: #2c3e50;
            color: white;
            height: 100%;
            padding: 20px;
            position: sticky;
            top: 0;
            overflow-y: auto;
            transition: width 0.3s;
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
            transition: background-color 0.3s, padding-left 0.3s, transform 0.3s;
        }

        .sidebar nav ul li form {
            color: white;
            cursor: pointer;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, padding-left 0.3s, transform 0.3s;
        }

        .sidebar nav ul li form button {
            width: 100%;
            cursor: pointer;
            text-align: left;
            background: transparent;
            font-size: 18px;
            outline: 0;
            border: 0;
            color: white;
        }

        .sidebar nav ul li a.active,
        .sidebar nav ul li a:hover {
            background-color: #34495e;
            padding-left: 20px;
            transform: scale(1.05);
        }
        
        .sidebar nav ul li form:hover {
            background-color: #34495e;
            padding-left: 20px;
            transform: scale(1.05);
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
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
            transition: background-color 0.3s, transform 0.3s;
        }

        .header-right button:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .header-right button:active {
            background-color: #a93226;
        }

        .content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.01);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            color: #666;
        }

        .card ul {
            list-style-type: disc;
            padding-left: 20px;
            margin-top: 10px;
        }

        .card ul li {
            margin-bottom: 5px;
        }

        .logo-box {
            background-color: #ddd;
            padding: 50px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-box h2 {
            font-size: 36px;
            color: #333;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                padding: 10px;
            }

            .logo-box {
                padding: 30px;
            }
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
                    <li><a href="" class="active">Dashboard</a></li>
                    <li><a href="/sktm">Pengajuan SKTM</a></li>
                    <li><a href="/suratpengantar">Surat Pengantar</a></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="button" onclick="alert(this)">Logout</button>
                        </form>
                    </li>
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
                    {{-- <a href='reservation.html'> --}}
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="button" onclick="alert(this)">Logout</button>
                    </form>
                    {{-- </a> --}}
                </div>
            </header>

            <div class="content">
              <!--  <div class="logo-box">
                    <h2>LOGO</h2> -->
                </div>
                <div class="card">
                    <h3>Surat Pengantar</h3>
                    <p>Surat Pengantar adalah dokumen yang diajukan oleh warga desa kepada pihak desa. Surat ini biasanya diperlukan untuk membuat atau mengurus berbagai dokumen resmi seperti:</p>
                    <ul>
                        <li>Kartu Keluarga (KK)</li>
                        <li>Kartu Tanda Penduduk (KTP)</li>
                        <li>Akta Kelahiran</li>
                        <li>Surat Keterangan Pindah</li>
                    </ul>
                    <p>Fungsi utama Surat Pengantar adalah untuk mempercepat proses pembuatan dokumen dan memastikan bahwa permohonan yang diajukan sudah sesuai dengan ketentuan desa.</p>
                </div>
                <div class="card">
                    <h3>Surat Keterangan Tidak Mampu (SKTM)</h3>
                    <p>Surat Keterangan Tidak Mampu (SKTM) digunakan untuk menyatakan bahwa seseorang atau keluarga tidak mampu secara finansial. SKTM dapat dibagi menjadi:</p>
                    <ul>
                        <li><strong>SKTM Pendidikan:</strong> digunakan untuk mendapatkan bantuan atau fasilitas pendidikan, seperti beasiswa atau keringanan biaya sekolah.</li>
                        <li><strong>SKTM Kesehatan:</strong> digunakan untuk mendapatkan bantuan kesehatan, seperti biaya pengobatan atau fasilitas medis di rumah sakit.</li>
                    </ul>
                    <p>SKTM membantu memastikan bahwa bantuan sosial dan fasilitas lainnya diberikan kepada mereka yang benar-benar membutuhkannya.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function alert(button) {
            Swal.fire({
                title: 'Apakah Anda yakin untuk logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#808080',
                confirmButtonText: 'Ya, konfirmasi!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('form').submit();
                }
            });
        }
    </script>
</body>

</html>
