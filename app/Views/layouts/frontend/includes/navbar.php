<nav class="navbar navbar-expand-lg rounded" style="background: #005A73;" aria-label="Thirteenth navbar example">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0 text-light" href="#">
                <img src="<?php echo (base_url()) ?>/img/logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-center">
                Rendhi News
            </a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('home') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('kesehatan') ?>">Kesehatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('lalin') ?>">Lalu Lintas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('galeri') ?>">Galeri</a>
                </li>

            </ul>
        </div>
    </div>
</nav>