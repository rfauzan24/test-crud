<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Kelas
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" value="<?= $kelas['nama_kelas']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_kelas'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>