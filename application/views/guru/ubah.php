<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Guru
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_guru" value="<?= $guru['id_guru']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama_guru" class="form-control" id="nama_guru" value="<?= $guru['nama_guru']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_guru'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" name="nip" class="form-control" id="nip" value="<?= $guru['nip']; ?>">
                            <small class="form-text text-danger"><?= form_error('nip'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <?php foreach ($jenis_kelamin as $j) : ?>
                                    <?php if ($j == $guru['jenis_kelamin']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>