<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Masuk</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container mt-5">
        <div class="content">
            <h2>Daftar Surat Masuk</h2>
            
            <?php if (session()->getFlashdata('message')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('message') ?>
                </div>
            <?php endif; ?>
            
            <button type="button" class="btn btn-success mb-3" onclick="window.location.href='<?= base_url('home/tambahsuratmasuk') ?>'">Tambah</button>
              <a href="<?= base_url('home/dashboard') ?>" class="btn btn-warning mb-3">Kembali</a>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Pengirim</th>
                        <th>Perihal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($suratmasuk as $surat): ?>
                        <tr>
                            <td><?= $surat->no_surat ?></td>
                            <td><?= $surat->tanggal_surat ?></td>
                            <td><?= $surat->pengirim ?></td>
                            <td><?= $surat->perihal ?></td>
                            <td><?= $surat->status ?></td>
                            <td>
                                <a href="<?= base_url('home/detailsuratmasuk/'.$surat->id_suratmasuk) ?>" class="btn btn-warning">Detail</a>
                                <a href="<?= base_url('home/hapussuratmasuk/'.$surat->id_suratmasuk) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus surat ini?')">Hapus</a>
                                <?php if ($surat->status != 'Arsip'): ?>
                                    <a href="<?= base_url('home/arsipsuratmasuk/'.$surat->id_suratmasuk) ?>" class="btn btn-secondary">Arsipkan</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
