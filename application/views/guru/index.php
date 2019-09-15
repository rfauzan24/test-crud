<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Guru <strong>berhasil !</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>guru/tambah" class="btn btn-primary">Tambah Data Guru</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Guru</h3>
            <ul class="list-group">
                <?php foreach ($guru as $list) : ?>
                    <li class="list-group-item">
                        <?= $list['nama_guru']; ?>
                        <a href="<?= base_url(); ?>guru/hapus/<?= $list['id_guru']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin ?');">hapus</a>
                        <a href="<?= base_url(); ?>guru/ubah/<?= $list['id_guru']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>guru/detail/<?= $list['id_guru']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>