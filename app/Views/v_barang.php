<?= $this->extend('v_template') ?>

<?= $this->section('title') ?>
Daftar Barang
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-3">
    <!-- <form action="/CBarang/search" method="get" class="mb-4">
        <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="Cari berdasarkan nama barang...">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
            </div>
        </div>
    </form> -->
    <!-- Tambahkan button untuk input barang -->
    <div class="mb-3">
        <a href="<?= base_url('CBarang/input') ?>" class="btn btn-primary">Input Barang</a>
    </div>
    <div class="table-responsive">
        <table id="barang" class="table table-striped table-hover">
            <thead class="thead-dark">
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
                    <td><img style="max-height: 100px; max-width: 100px;" src="<?= 'http://localhost/ci4composer/public/assets/images/'.$item['gambar']?>" alt="" srcset=""></td>
                    <td><?= $item['nama_barang'] ?></td>
                    <td><?= $item['harga'] ?></td>
                    <td>
                        <!-- Menggunakan tombol anchor untuk mengarahkan ke halaman detail barang -->
                        <a href="<?= base_url('/CBarang/view/'.$item['id_barang']) ?>" class="btn btn-success">Detail</a>
                        <!-- Trigger modal untuk konfirmasi hapus -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $item['id_barang'] ?>">
                            Delete
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal<?= $item['id_barang'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus barang ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="<?= base_url('/CBarang/delete/'.$item['id_barang']) ?>" class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<script>
    function showDetails(id) {
        var detailsDiv = document.getElementById(id);
        if (detailsDiv.style.display === "none") {
            detailsDiv.style.display = "block";
        } else {
            detailsDiv.style.display = "none";
        }
    }
</script>
<?= $this->endSection() ?>
