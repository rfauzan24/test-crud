<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $siswa['nama_siswa']; ?></h5>
                    <p class="card-text"><?= $siswa['nis']; ?></p>
                    <p class="card-text"><?= $siswa['jenis_kelamin']; ?></p>
                    <a href="<?= base_url(); ?>siswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>