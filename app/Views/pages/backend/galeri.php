<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Data Galeri<?= $this->endSection() ?>
<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg">
    <h1><b>Data Galeri</b></h1>
</nav>

<section class="content-tabel">
    <div class="main-content">
        <div class="block">
            <a href="galeri/tambah" class="btn btn-primary btn-sm my-4"><i class="bx bx-plus"></i> Tambah Data</a>
            <div class="card">
                <div class="card-header">
                    <h6>Table Data Galeri</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>Tanggal Upload</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($galeri as $key) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><img src="<?= base_url('img/galeri/' . $key['foto']); ?>" style="width: 200px;"></td>
                                        <td><?= $key['judul_foto']; ?></td>
                                        <td><?= $key['tanggal']; ?></td>
                                        <td>
                                            <a href="galeri/edit/<?= $key['id_galeri'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="galeri/delete/<?= $key['id_galeri'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus data tersebut?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>