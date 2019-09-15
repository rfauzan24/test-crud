<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Kelas <strong>berhasil !</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>kelas/tambah" class="btn btn-primary">Tambah Data Kelas</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar kelas</h3>
            <ul class="list-group">
                <?php foreach ($kelas as $list) : ?>
                    <li class="list-group-item">
                        <?= $list['nama_kelas']; ?>
                        <a href="<?= base_url(); ?>kelas/hapus/<?= $list['id_kelas']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin ?');">hapus</a>
                        <a href="<?= base_url(); ?>kelas/ubah/<?= $list['id_kelas']; ?>" class="badge badge-success float-right">ubah</a>
                        <!-- <a href="<?= base_url(); ?>kelas/detail/<?= $list['id_kelas']; ?>" class="badge badge-primary float-right">detail</a> -->
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>