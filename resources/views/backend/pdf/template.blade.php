<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { text-align: center; }
        p { margin: 20px 0; }
        .content { padding: 20px; border: 1px solid #000; }
        hr {
            border: 0;
            border-top: 1px solid #000;
            margin: 0 0 20px 0;
        }
    </style>
    <title>{{ $jenis_surat }}</title>
</head>
<body>
    <div class="content">
        <h1>{{ $jenis_surat }}</h1>
        <hr>
        
        <p><strong>Nama Lengkap:</strong> {{ $nama_lengkap }}</p>
        
        @if ($jenis_surat == 'SKTM Kesehatan')
            <p><strong>Jenis Kelamin:</strong> {{ $jenis_kelamin }}</p>
            <p><strong>Tempat, Tanggal Lahir:</strong> {{ $tempat_lahir }}, {{ $tgl_lahir }}</p>
            <p><strong>Status:</strong> {{ $status }}</p>
            <p><strong>Alamat:</strong> {{ $alamat }}</p>
            <p><strong>Pekerjaan:</strong> {{ $pekerjaan }}</p>
            <p><strong>Nama Suami:</strong> {{ $nama_suami }}</p>
            <p><strong>Keperluan:</strong> {{ $keperluan }}</p>
        @elseif ($jenis_surat == 'SKTM Pendidikan')
            <p><strong>Jenis Kelamin:</strong> {{ $jenis_kelamin }}</p>
            <p><strong>Tempat, Tanggal Lahir:</strong> {{ $tempat_lahir }}, {{ $tgl_lahir }}</p>
            <p><strong>Status:</strong> {{ $status }}</p>
            <p><strong>Alamat:</strong> {{ $alamat }}</p>
            <p><strong>Nama KK Bapak:</strong> {{ $nama_kk_bapak }}</p>
            <p><strong>Keperluan:</strong> {{ $keperluan }}</p>
        @elseif ($jenis_surat == 'Surat Pengantar')
            <p><strong>Jenis Kelamin:</strong> {{ $jenis_kelamin }}</p>
            <p><strong>Tempat, Tanggal Lahir:</strong> {{ $tempat_lahir }}, {{ $tgl_lahir }}</p>
            <p><strong>Agama:</strong> {{ $agama }}</p>
            <p><strong>Kewarganegaraan:</strong> {{ $kewarganegaraan }}</p>
            <p><strong>Pekerjaan:</strong> {{ $pekerjaan }}</p>
            <p><strong>Status Perkawinan:</strong> {{ $status_perkawinan }}</p>
            <p><strong>Alamat:</strong> {{ $alamat }}</p>
            <p><strong>Surat Bukti:</strong> {{ $surat_bukti }}</p>
            <p><strong>Masa Berlaku:</strong> {{ $masa_berlaku }}</p>
            <p><strong>Keperluan:</strong> {{ $keperluan }}</p>
            <p><strong>Keterangan:</strong> {{ $keterangan }}</p>
        @endif
    </div>
</body>
</html>
