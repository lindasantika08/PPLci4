<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter Template with Bootstrap</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS to ensure proper footer positioning */
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PPL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('CHome') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('CInfo') ?>">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('CBarang') ?>">Barang</a>
                </li>
            </ul>
           <div class='row'>
                <p class='text-white my-2 mr-4'>
                    <?= session()->get('username') ?>
                </p>
                <form class="form-inline my-2 mr-3 my-lg-0" action="<?= base_url('auth/logout') ?>" method="post">
                    <button class='btn btn-danger my-2 my-sm-0' type='submit'>Logout</button>
                </form>
           </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        Footer
    </footer>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
    <script> new DataTable('#barang'); </script>
</body>

</html>
