<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Surat Masuk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        td a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        td a:hover {
            text-decoration: underline;
        }

        .btn-back {
            display: block;
            width: 150px;
            margin: 30px auto;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }

        @media screen and (max-width: 768px) {
            table {
                width: 95%;
            }

            th, td {
                font-size: 14px;
                padding: 8px;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <?php if ($suratkeluar): ?>
            <table>
                <tr>
        <th>No Surat</th>
        <td><?= esc($suratkeluar->no_surat) ?></td>
    </tr>
    <tr>
        <th>Tanggal Surat</th>
        <td><?= esc($suratkeluar->tanggal_surat) ?></td>
    </tr>
    <tr>
        <th>Pengirim</th>
        <td><?= esc($suratkeluar->pengirim) ?></td>
    </tr>
    <tr>
        <th>Perihal</th>
        <td><?= esc($suratkeluar->perihal) ?></td>
    </tr>
    <tr>
        <th>Status</th>
        <td><?= esc($suratkeluar->status) ?></td>
    </tr>
    <tr>
        <th>File Surat</th>
        <td><a href="<?= base_url('public/upload/' . $suratkeluar->filesurat) ?>" target="_blank">Lihat File</a></td>
    </tr>
</table>
 <?php else: ?>
            <p>Data tidak ditemukan</p>
        <?php endif; ?>
 <a href="<?= base_url('home/suratkeluar') ?>" class="btn-back">Kembali</a>
    </div>

</body>
</html>