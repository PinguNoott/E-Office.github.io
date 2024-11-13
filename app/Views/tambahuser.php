<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
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
            border: 1px solid #ccc; /* Border sederhana */
            border-radius: 5px;
            background-color: #fff;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333; /* Warna teks untuk judul */
        }

        label {
            color: #333;
            font-weight: bold;
        }

        input[type="text"], input[type="date"] {
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
            background-color: #4CAF50; /* Hijau lembut untuk tombol */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049; /* Lebih gelap sedikit saat hover */
        }

        .form-group {
            margin-bottom: 15px;
        }
        </style>
</head>
<body>
    <h2>Form Tambah User</h2>
    <form action="<?=base_url('home/aksi_t_user')?>" method="post">


        <label for="nama">Username</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="level">Level</label><br>
        <input type="text" id="level" name="level" required><br><br>

        <label for="pass">Password</label><br>
        <input type="text" id="pass" name="pass" required><br><br>
        
        <button type="submit">Tambah :D</button>

    </form>
</body>
</html>
