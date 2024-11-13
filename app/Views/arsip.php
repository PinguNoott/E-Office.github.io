<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Surat</title>
    <!-- Link Google Font (Baloo 2) -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS for better styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Baloo 2', sans-serif;
        }

        .container {
            margin-top: 40px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            color: #495057;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .btn-warning {
            background-color: #ffc107;
            color: white;
            border: none;
            font-weight: bold;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            color: white;
        }

        .table {
            border-radius: 8px;
            background-color: #ffffff;
            overflow: hidden;
        }

        .table thead th {
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            background-color: #007bff;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #f1f3f5;
        }

        .table tbody td {
            vertical-align: middle;
        }

        .empty-message {
            color: #6c757d;
            text-align: center;
            font-style: italic;
        }

        .back-btn {
            background-color: #dc3545;
            color: white;
            padding: 8px 15px;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .back-btn:hover {
            background-color: #c82333;
            text-decoration: none;
        }

    </style>
</head>
<body>

    <a href="<?= base_url('home/dashboard') ?>" class="back-btn">Kembali</a>

    <div class="container">
        <h2>Arsip Surat Masuk</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Pengirim</th>
                    <th>Perihal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($suratMasukArsip)) : ?>
                    <?php foreach ($suratMasukArsip as $surat) : ?>
                        <tr>
                            <td><?= $surat->no_surat ?></td>
                            <td><?= $surat->tanggal_surat ?></td>
                            <td><?= $surat->pengirim ?></td>
                            <td><?= $surat->perihal ?></td>
                            <td><?= $surat->status ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="empty-message">Tidak ada surat masuk yang diarsipkan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <h2>Arsip Surat Keluar</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Tujuan</th>
                    <th>Perihal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($suratKeluarArsip)) : ?>
                    <?php foreach ($suratKeluarArsip as $surat) : ?>
                        <tr>
                            <td><?= $surat->no_surat ?></td>
                            <td><?= $surat->tanggal_surat ?></td>
                            <td><?= $surat->tujuan ?></td>
                            <td><?= $surat->perihal ?></td>
                            <td><?= $surat->status ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="empty-message">Tidak ada surat keluar yang diarsipkan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies (Optional, for interactions like dropdowns) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
