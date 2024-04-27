<?= $this->extend('v_template') ?>

<?= $this->section('title') ?>
Input Barang
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Input Barang</h2>
    <form action="<?= base_url('/CBarang/add') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="kode">Kode Barang</label>
            <input type="text" class="form-control" id="kode" name="kode">
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga">
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" accept="image/png, image/gif, image/jpeg"  class="form-control" id="gambar" name="gambar">
        </div>
        <!-- Tambahkan inputan lain sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>
