<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Detail Barang</h1>
        <div class="card">
            <div class="card-body">
                <?php if ($barang['gambar']): ?>
                    <img src="<?= $barang['gambar'] ?>" class="img-fluid mb-3" alt="Gambar Barang">
                <?php endif; ?>
                <p class="card-text"><strong>Kode Barang:</strong> <?= $barang['kode'] ?></p>
                <p class="card-text"><strong>Nama Barang:</strong> <?= $barang['nama_barang'] ?></p>
                <p class="card-text"><strong>Harga:</strong> <?= $barang['harga'] ?></p>
                <a href="/barang" class="btn btn-primary">Kembali ke Daftar Barang</a>
            </div>
        </div>
    </div>
</body>
</html>
