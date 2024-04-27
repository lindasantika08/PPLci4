<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table {
            width: 80%; /* Adjusted to better fit the default Bootstrap styling */
        }

        /* Enhance the default button and links styling */
        a {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Styling for the "Insert" button to use Bootstrap classes */
        .insert-button {
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            margin-bottom: 5px;
            display: inline-block;
            text-decoration: none;
            font-size: 20px;
            margin-left: 180px;
        }

        .insert-button:hover {
            background-color: #0056b3;
        }

        /* Gaya tambahan untuk link aksi */
        .action-link {
            color: #007bff; /* Warna biru */
            font-weight: bold; /* Tebal */
        }

        .action-link:hover {
            color: #0056b3; /* Warna biru gelap saat dihover */
            text-decoration: underline;
        }

        /* Additional margin for search form to provide spacing */
        .form-inline {
            margin-bottom: 20px; /* Increase spacing below the search form */
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <!-- Formulir Pencarian -->
    <form action="/barang/search" method="get" class="form-inline">
        <input type="text" name="keyword" placeholder="Cari berdasarkan nama barang..." size="133" class="form-control mr-2">
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Barang</h1>
        <a href="/barang/input" class="insert-button btn btn-primary">Input</a>
    </div>

    <!-- Table with Bootstrap classes -->
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barang as $item): ?>
            <tr>
                <td><?= $item['kode'] ?></td>
                <td><img src="<?= $item['gambar'] ?>" alt="Gambar" style="width: 100px;"></td>
                <td><?= $item['nama_barang'] ?></td>
                <td><?= $item['harga'] ?></td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="window.location='/barang/view/<?= $item['id_barang'] ?>'">View</button>
                    <button type="button" class="btn btn-danger" onclick="window.location='/barang/delete/<?= $item['id_barang'] ?>'">Delete</button>
                    <button type="button" class="btn btn-success" onclick="window.location='/barang/update/<?= $item['id_barang'] ?>'">Update</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
