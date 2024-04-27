<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang Baru</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Input Barang Baru</h1>
        <form action="/barang/add" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="kode">Kode Barang:</label>
                <input type="text" id="kode" name="kode" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang:</label>
                <input type="text" id="nama_barang" name="nama_barang" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="text" id="harga" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" name="gambar" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Barang</button>
        </form>
    </div>
</body>
</html>
