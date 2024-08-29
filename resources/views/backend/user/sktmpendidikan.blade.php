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
        }

        .sidebar nav ul li form:hover {
            background-color: #34495e;
            padding-left: 20px;
            transform: scale(1.05);
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
        .form-group textarea,
        .form-group select {
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

        .form-group input[type="submit"] {
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3; /* Warna latar belakang saat hover */
            transform: scale(1.05); /* Membesarkan tombol sedikit */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
        }

        .error {
            border-color: red;
        }

        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile">
                <!-- <img src="user-icon.png" alt="User" class="profile-img">  Replace with your user icon -->
                <h2>PENGGUNA</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="/dashboarduser">Dashboard</a></li>
                    <li><a href="/sktm" class="active">Pengajuan SKTM</a></li>
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
                    <h1>Formulir Pengajuan SKTM PENDIDIKAN</h1>
                </div>
            </header>

            <div class="content">
                <form id="form" action="{{ route('sktmPendidikan.create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Siswa</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" id="status" name="status" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_kk_bapak">Nama KK/Bapak</label>
                        <input type="text" id="nama_kk_bapak" name="nama_kk_bapak" required>
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <textarea id="keperluan" name="keperluan" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery script for validation -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false
            });
        @endif

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

    $(document).ready(function() {
        $('#form').on('submit', function(event) {
            let isValid = true;

            // Clear previous errors
            $('.form-group').removeClass('error');
            $('.error-message').remove();

            // Check each required field
            $('#form input[required], #form select[required], #form textarea[required]').each(function() {
                if ($(this).val().trim() === '' || ($(this).is('select') && $(this).val() === '')) {
                    isValid = false;
                    $(this).closest('.form-group').addClass('error');
                    $(this).after('<div class="error-message">This field is required</div>');
                }
            });

            if (!isValid) {
                event.preventDefault(); // Prevent form submission if invalid
            }
        });
    });
    </script>
</body>

</html>
