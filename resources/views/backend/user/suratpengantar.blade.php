
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
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }

    .container {
        display: flex;
    }

    nav {
        width: 200px;
        background-color: #333;
        color: white;
        padding: 20px;
    }

    .profile-picture {
        text-align: center;
        margin-bottom: 20px;
    }

    .profile-picture img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    .profile-picture p {
        margin: 10px 0 0;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
    }

    nav ul li {
        margin: 10px 0;
        display: flex;
        align-items: center;
    }

    nav ul li:hover {
        background-color: #575757;
        cursor: pointer;
    }

    nav ul li a {
        text-decoration: none;
        color: white;
        margin-left: 10px;
        flex-grow: 1;
    }

    nav ul li a:hover,
    nav ul li a:active {
        color: white;
        background-color: transparent;
        text-decoration: none;
    }

    .form-section {
        flex-grow: 1;
        padding: 20px;
        background-color: white;
        margin: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-section h1 {
        margin-bottom: 20px;
    }

    .form-section form label {
        display: block;
        margin: 10px 0 5px;
    }

    .form-section form input,
    .form-section form select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-section form button {
        padding: 10px 20px;
        background-color: #333;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-section form button:hover {
        background-color: #575757;
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

        .logout-btn {
            background-color: red;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

    
</style>
<body>

    <div class="container">
        <nav>
            <div class="profile-picture">
                <img src="profile.jpg" alt="Profile Picture">
                <p>User</p>
            </div>
            <ul>
                <li><i class="fas fa-tachometer-alt"></i><a href="#">Dashboard</a></li>
                <li><i class="fas fa-file-alt"></i><a href="sktm">Pengajuan SKTM</a></li>
                <li><i class="fas fa-envelope"></i><a href="pengantar">Surat Pengantar</a></li>
                <li><i class="fas fa-sign-out-alt"></i><a href="#">Logout</a></li>
            </ul>
        </nav>
        
    
        <section class="form-section">
            <h1>Formulir Pengajuan Surat Pengantar</h1>
            <form action="#" method="post">
                <label for="full-name">Nama Lengkap:</label>
                <input type="text" id="full-name" name="full-name"><br/>

                <label for="gender">Jenis Kelamin:</label>
                <select id="gender" name="gender">
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select><br/>

                <label for="birth-place">Tempat, Tanggal Lahir:</label>
                <input type="text" id="birth-place" name="birth-place"><br/>

                <label for="religion">Agama:</label>
                <input type="text" id="religion" name="religion"><br/>

                <label for="nationality">Kewarganegaraan:</label>
                <input type="text" id="nationality" name="nationality"><br/>

                <label for="occupation">Pekerjaan:</label>
                <input type="text" id="occupation" name="occupation"><br/>

                <label for="marital-status">Status Perkawinan:</label>
                <input type="text" id="marital-status" name="marital-status"><br/>

                <label for="address">Alamat Tinggal:</label>
                <input type="text" id="address" name="address"><br/>

                <label for="purpose">Keperluan:</label>
                <input type="text" id="purpose" name="purpose"><br/>

                <button type="submit">Submit</button>
            </form>
        </section>
    </div>
</body>
</html>