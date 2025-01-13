<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Berita Kesehatan<?= $this->endSection() ?>
<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg">
    <h1><b>Berita Kesehatan</b></h1>
</nav>

<section class="content-tabel">
    <div class="main-content">
        <div class="block">
            <a href="kesehatan/tambah" class="btn btn-primary btn-sm my-4"><i class="bx bx-plus"></i> Tambah Data</a>
            <div class="card">
                <div class="card-header">
                    <h6>Table Berita Kesehatan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal Upload</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kesehatan as $key) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><img src="<?= base_url('img/kesehatan/' . $key['foto_kes']); ?>" style="width: 200px;"></td>
                                        <td><?= $key['judul']; ?></td>
                                        <td><?= $key['deskripsi']; ?></td>
                                        <td><?= $key['tanggal']; ?></td>
                                        <td><?= $key['kategori']; ?></td>
                                        <td>
                                            <a href="kesehatan/edit/<?= $key['id_kes'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="kesehatan/delete/<?= $key['id_kes'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus data tersebut?')">Hapus</a>
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