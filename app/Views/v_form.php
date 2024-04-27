<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Formulir</h2>
        <?php if (session()->getFlashdata('errors')) : ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
        <form method="post" action="<?= site_url('/formValidation/submit') ?>">
            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" class="form-control" value="<?= old('nip') ?>" id="nip" name="nip">
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" value="<?= old('nama') ?>"id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" value="<?= old('tgl_lahir') ?>" id="tgl_lahir" name="tgl_lahir">
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" <?= old('gender') === 'Laki-laki' ? 'checked' : '' ?> name="gender" id="gender_laki" value="Laki-laki">
                    <label class="form-check-label" for="gender_laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"<?= old('gender') === 'Perempuan' ? 'checked' : '' ?> name="gender" id="gender_perempuan" value="Perempuan">
                    <label class="form-check-label" for="gender_perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan:</label>
                <select class="form-control" id="pendidikan" name="pendidikan">
                    <option value="SD" <?= old('pendidikan') === 'SD' ? 'selected' : '' ?>>SD</option>
                    <option value="SMP"<?= old('pendidikan') === 'SMP' ? 'selected' : '' ?>>SMP</option>
                    <option value="SMA" <?= old('pendidikan') === 'SMA' ? 'selected' : '' ?>>SMA</option>
                    <option value="D3" <?= old('pendidikan') === 'D3' ? 'selected' : '' ?>>D3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor HP:</label>
                <input type="text" class="form-control" value="<?= old('no_hp') ?>" id="no_hp" name="no_hp">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" value="<?= old('email') ?>" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
