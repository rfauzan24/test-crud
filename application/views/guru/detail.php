<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Guru
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $guru['nama_guru']; ?></h5>
                    <p class="card-text"><?= $guru['nip']; ?></p>
                    <p class="card-text"><?= $guru['jenis_kelamin']; ?></p>
                    <a href="<?= base_url(); ?>guru" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>