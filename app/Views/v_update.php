<?= $this->extend('v_template') ?>

<?= $this->section('title') ?>
Input Barang
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Input Barang</h2>
    <form action="<?= base_url('/CBarang/updateAction/').$barang['id_barang'] ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="kode">Kode Barang</label>
            <input type="text" value="<?= $barang['kode'] ?>" class="form-control" id="kode" name="kode">
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" value="<?= $barang['nama_barang'] ?>" class="form-control" id="nama_barang" name="nama_barang">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" value="<?= $barang['harga'] ?>" class="form-control" id="harga" name="harga">
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" value="<?= $barang['stok'] ?>" class="form-control" id="stok" name="stok">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" value="<?= $barang['deskripsi'] ?>" id="deskripsi" name="deskripsi" rows="3"></textarea>
        </div>
        <div class="form-group">
        <?php if ($barang['gambar']): ?>
                <img src="<?= 'http://localhost/ci4composer/public/assets/images/'.$barang['gambar'] ?>" alt="Current Image" class="img-thumbnail mb-2" style="max-width: 150px;">
            <?php endif; ?>
            <input type="file" name="gambar" class="form-control-file">
        </div>
        <!-- Tambahkan inputan lain sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>
