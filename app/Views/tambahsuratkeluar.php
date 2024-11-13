<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Surat Keluar</title>
    <style>
         body {
            font-family: 'Baloo 2', sans-serif;
            margin: 0;
            padding: 20px;
            color: #5D4A3D; 
            background-color: #f0f4ff; /* Light pastel background */
        }
        .form-container {
            padding: 20px;
            border: 1px solid #ccc; /* Simple border */
            border-radius: 5px;
            background-color: #fff;
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            color: #333; /* Text color for the heading */
        }

        label {
            color: #333;
            font-weight: bold;
        }

        input[type="text"], input[type="date"], select, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50; /* Soft green for the button */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049; /* Darker shade when hovered */
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h2>Form Tambah Surat Keluar</h2>
    <div class="form-container">
        <form action="<?= base_url('home/aksi_t_suratkeluar') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="no_surat">No Surat</label>
                <input type="text" class="form-control" id="no_surat" name="no_surat" required>
            </div>

            <div class="form-group">
                <label for="tanggal_surat">Tanggal Surat</label>
                <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" required>
            </div>

            <div class="form-group">
                <label for="pengirim">Pengirim</label>
                <input type="text" class="form-control" id="pengirim" name="pengirim" required>
            </div>

            <div class="form-group">
                <label for="perihal">Perihal</label>
                <textarea class="form-control" id="perihal" name="perihal" rows="2" required></textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Dikirim">Dikirim</option>
                    <option value="Terkirim">Terkirim</option>
                    <option value="Ditunda">Ditunda</option>
                </select>
            </div>

           <!--  <div class="form-group">
                <label for="file_surat">File Surat</label>
                <input type="file" class="form-control-file" id="file_surat" name="file_surat" accept=".pdf,.docx,.jpg,.png" required>
            </div> -->

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
