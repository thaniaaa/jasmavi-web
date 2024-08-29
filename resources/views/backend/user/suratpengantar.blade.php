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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
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
            font-weight: bold;
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
                <li><a href="dashboarduser">Dashboard</a></li>
                <li><a href="sktm">Pengajuan SKTM</a></li>
                <li><a href="" class="active">Surat Pengantar</a></li>
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
            <form id="form" action="{{ route('suratPengantar.create') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
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
                    <label for="agama">Agama</label>
                    <input type="text" id="agama" name="agama" required>
                </div>
                <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <input type="text" id="kewarganegaraan" name="kewarganegaraan" required>
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" required>
                </div>
                <div class="form-group">
                    <label for="status_perkawinan">Status Perkawinan</label>
                    <input type="text" id="status_perkawinan" name="status_perkawinan" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Tinggal</label>
                    <input type="text" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="surat_bukti">Surat Bukti</label>
                    <input type="text" id="surat_bukti" name="surat_bukti" maxlength="16" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                </div>
                <div class="form-group">
                    <label for="masa_berlaku">Masa Berlaku</label>
                    <input type="date" id="masa_berlaku" name="masa_berlaku" required>
                </div>
                <div class="form-group">
                    <label for="keperluan">Keperluan</label>
                    <textarea id="keperluan" name="keperluan" required></textarea>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery script for validation -->
<script>
    $(document).ready(function() {

        // Efek interaksi dinamis
        $("input[type='submit']").on('click', function() {
            $(this).css({
                'background-color': '#003d7a', // Ubah warna saat diklik
                'transform': 'scale(0.98)' // Skala tombol sedikit lebih kecil saat klik
            });
            // Reset kembali ke warna asli setelah beberapa detik
            setTimeout(function() {
                $("input[type='submit']").css({
                    'background-color': '#007bff',
                    'transform': 'scale(1)'
                });
            }, 200); // Ubah warna kembali setelah 200ms
        });

        $("#form").validate({
            rules: {
                nama_lengkap: "required",
                jenis_kelamin: "required",
                tempat_lahir: "required",
                tgl_lahir: "required",
                status: "required",
                alamat: "required",
                pekerjaan: "required",
                surat_bukti: {
                    required: true,
                    digits: true,
                    maxlength: 16
                },
               masa_berlaku: "required",
               keperluan: "required", 
               keterangan: "required"
            },
            messages: {
                nama_lengkap: "Nama lengkap harus diisi",
                jenis_kelamin: "Jenis kelamin harus dipilih",
                alamat: "Alamat harus diisi",
                surat_bukti: {
                    required: "NIK harus diisi",
                    digits: "NIK harus berupa angka",
                    maxlength: "NIK tidak boleh lebih dari 16 digit"
                }
            }
        });
    });
</script>
</body>
<html>