<?= $this->extend('v_template') ?>

<?= $this->section('title') ?>
Detail Barang
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Detail Barang</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= $barang['nama_barang'] ?></h5>
            <img style="max-height: 300px; max-width: 300px;" src="<?= 'http://localhost/ci4composer/public/assets/images/'.$barang['gambar']?>" alt="" srcset="">
            <p class="card-text"><strong>Kode Barang:</strong> <?= $barang['kode'] ?></p>
            <p class="card-text"><strong>Harga:</strong> <?= $barang['harga'] ?></p>
            <p class="card-text"><strong>Stok:</strong> <?= $barang['stok'] ?></p>
            <p class="card-text"><strong>Deskripsi:</strong> <?= $barang['deskripsi'] ?></p>
            <a href="<?= base_url('CBarang') ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
