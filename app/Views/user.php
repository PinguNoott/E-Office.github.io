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
" class="btn btn-success" onclick="window.location.href='<?=base_url('home/tambahuser')?>'">Tambah</button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Level</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <a href="<?=base_url('home/dashboard')?>">
    <button class="btn btn-warning">Kembali</button>
        </a>
            <?php
            $no = 1;
            foreach ($desta as $key => $satu) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $satu->username ?></td>
                <td>
                    <?php
                   if ($satu->level==1) {
                    echo "Super Admin";
                   }else if ($satu->level==2) {
                        echo "Admin";
                   }else if ($satu->level==3) {
                            echo "Manager";
                   }else if ($satu->level==4) {
                                echo "Pustakawan";
                   }else if ($satu->level==5) {
                                    echo "Pengunjung";
                   }
                   ?></td>
 <td><?= $satu->password ?></td>
 <td>
    <a href="<?=base_url('home/edituser/'.$satu->id_user)?>">
        <button class="btn btn-primary">Edit</button>
    </a>
    <a href="<?=base_url('home/hapususer/'.$satu->id_user)?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
        <button class="btn btn-danger">Hapus</button>
    </a>    
</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    
</body>

</html>
