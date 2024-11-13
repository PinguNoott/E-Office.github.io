<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <!-- Link Google Font (Baloo 2) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap">
    
</head>
<body>
      <div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <div class="page-title">
                        <div class="btn-group" role="group">

</div>
<div class="card-body">       
<button type="button
" class="btn btn-success" onclick="window.location.href='<?=base_url('home/tambahsuratkeluar')?>'">Tambah</button>
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
                                    <a href="<?=base_url('home/dashboard')?>">
    <button class="btn btn-warning">Kembali</button>
        </a>
                                    <?php foreach ($suratkeluar as $surat): ?>
                                        <tr>
                                            <td><?= $surat->no_surat ?></td>
                                            <td><?= $surat->tanggal_surat ?></td>
                                            <td><?= $surat->pengirim ?></td>
                                            <td><?= $surat->perihal ?></td>
                                            <td><?= $surat->status ?></td>
                                            <td>
    <a href="<?= base_url('home/detailsuratkeluar/'.$surat->id_suratkeluar) ?>" class="btn btn-warning">Detail</a> |
    <a href="<?= base_url('home/hapussuratkeluar/'.$surat->id_suratkeluar) ?>" class="btn btn-danger">Hapus</a> |
    <?php if ($surat->status != 'Arsip'): ?>
        <a href="<?= base_url('home/arsipSuratKeluar/'.$surat->id_suratkeluar) ?>" class="btn btn-secondary">Arsipkan</a>
    <?php endif; ?>
              </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>
