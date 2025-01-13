<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Data User<?= $this->endSection() ?>
<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg">
    <h1 class="p-2"><b>Data User</b></h1>
</nav>
<section class="content-tabel">
    <div class="main-content">
        <div class="block">
            <a href="user/tambah" class="btn btn-primary btn-sm my-4"><i class="bx bx-plus"></i> Tambah Data</a>
            <div class="card">
                <div class="card-header">
                    <h6>Daftar User</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($user as $key) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><img src="<?= base_url('img/user/' . $key['userfile']); ?>" style="width: 200px;"></td>
                                        <td><?= $key['nama']; ?></td>
                                        <td><?= $key['email']; ?></td>
                                        <td><?= $key['username']; ?></td>
                                        <td>
                                            <a href="user/edit/<?= $key['id_user'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="user/delete/<?= $key['id_user'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
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