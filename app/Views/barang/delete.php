<!-- File: app/Views/barang/delete.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Barang</title>
</head>
<body>
    <h1>Hapus Barang</h1>
    <p>Anda yakin ingin menghapus barang ini?</p>
    <p><strong>Kode Barang:</strong> <?= $barang['kode'] ?></p>
    <p><strong>Nama Barang:</strong> <?= $barang['nama_barang'] ?></p>
    <p><strong>Harga:</strong> <?= $barang['harga'] ?></p>
    <form action="/barang/delete/<?= $barang['id_barang'] ?>" method="POST">
        <button type="submit">Hapus</button>
    </form>
    <a href="/barang">Batal</a>
</body>
</html>
