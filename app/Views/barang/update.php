<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h1>Update Barang</h1>
    <form action="/barang/updateAction/<?= $barang['id_barang'] ?>" method="post" enctype="multipart/form-data" class="mb-3">
        <div class="form-group">
            <label for="kode">Kode Barang:</label>
            <input type="text" id="kode" name="kode" value="<?= $barang['kode'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <!-- Show current image if available -->
            <?php if ($barang['gambar']): ?>
                <img src="<?= $barang['gambar'] ?>" alt="Current Image" class="img-thumbnail mb-2" style="max-width: 150px;">
            <?php endif; ?>
            <input type="file" name="gambar" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" id="harga" name="harga" value="<?= $barang['harga'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" value="<?= $barang['stok'] ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control"><?= $barang['deskripsi'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
