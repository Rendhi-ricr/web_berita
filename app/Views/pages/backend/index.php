<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Dashboard<?= $this->endSection() ?>
<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg">
    <h1><b>Dashboard</b></h1>
</nav>

<section class="content">
    <div class="main-content">
        <div class="row ">
            <div class="col-md-4">
                <div class="shadow p-3 bg-white rounded ">
                    <div class="row px-3 align-items-center">
                        <div class="col-sm-auto">
                            <h5 class="card-title">Jumlah Foto Di Galeri</h5>
                            <p class="card-text">Terdapat <strong><?= $galeri ?></strong> foto di galeri web ini.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shadow p-3 bg-white rounded ">
                    <div class="row px-3 align-items-center">
                        <div class="col-sm-auto">
                            <h5 class="card-title">Jumlah Berita Kesehatan</h5>
                            <p class="card-text">Terdapat <strong><?= $kesehatan ?></strong> berita kesehatan di web ini.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shadow p-3 bg-white rounded ">
                    <div class="row px-3 align-items-center">
                        <div class="col-sm-auto">
                            <h5 class="card-title">Jumlah Berita Lalu Lintas</h5>
                            <p class="card-text">Terdapat <strong><?= $lalulintas ?></strong> berita lalu lintas di web ini.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<?= $this->endSection() ?>