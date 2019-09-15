<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url() ?>siswa/tambah" class="btn btn-primary">Tambah Data Siswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Siswa</h3>
            <ul class="list-group">
                <?php foreach ($siswa as $list) : ?>
                    <li class="list-group-item"><?= $list['nama_siswa'] ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

</div>