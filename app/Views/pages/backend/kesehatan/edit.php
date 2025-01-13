<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Edit Berita Kesehatan<?= $this->endSection() ?>
<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg">
    <h1 class="p-2"><b>Form Edit Berita</b></h1>
</nav>
<section class="content">
    <div class="main-content">
        <div class="container">
            <form id="EditBeritaForm" action="<?php echo base_url('admin/kesehatan/update') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $kesehatan['id_kes']; ?>">
                <!-- <img src="" alt="" class="img-fluid" width="10%"> -->
                <div class="row">
                    <div class="col-8">
                        <div class=" form-group mb-4">
                            <label for="juduleberita">Judul Berita Umum:</label>
                            <input type="text" class="form-control" id="judulberita" name="judulberita" value="<?= $kesehatan['judul']; ?>" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Unggah Foto:</label>
                            <input type="file" class="form-control" id="foto" name="foto" onchange="previewFile()">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group mb-4">
                            <label for="isiberita">Deskripsi Berita Umum:</label>
                            <textarea class="form-control" id="isiberita" name="isiberita" rows="5" required><?= $kesehatan['deskripsi']; ?></textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="holder mb-2">
                            <img id="imgPreview" src="<?= base_url('img/kesehatan/' . $kesehatan['foto_kes']); ?>" alt="pic" width="40%" />
                        </div>
                    </div>
                    <div class="col-8">
                        <div class=" form-group mb-4">
                            <label for="kategori">Kategori :</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $kesehatan['kategori']; ?>" required>
                        </div>
                    </div>
                    <button class="btn btn-primary" onclick="return confirm('apakah anda yakin ingin merubah data tersebut?')">Publish</button>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection() ?>