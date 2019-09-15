<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h2 style="margin-top: 0;">
                <small>Selamat datang</small>
                <br />
                <?php echo $this->session->userdata('name_id') ?>
            </h2>
            <hr />
            <div class="form-group">
                <label>Role</label>
                <br /><?php echo ucwords($this->session->userdata('role')) ?>
            </div>
            <?php
            // Cek role user
            if ($this->session->userdata('role') == 'admin') { // Jika role-nya admin
                ?>
                <div class="form-group">
                    <label>Hak Akses</label>
                    <br />
                    <ol style="margin-left: -25px;">
                        <li>
                            Akses menu home. Aksi yang diperbolehkan : Read
                        </li>
                        <li>
                            Akses menu siswa. Aksi yang diperbolehkan : Create, Read, Update, Delete
                        </li>
                        <li>
                            Akses menu guru. Aksi yang diperbolehkan : Create, Read, Update, Delete
                        </li>
                        <li>
                            Akses menu kelas. Aksi yang diperbolehkan : Create, Read, Update, Delete
                        </li>
                    </ol>
                </div>
            <?php
            } else { // Jika role-nya operator
                ?>
                <div class="form-group">
                    <label>Hak Akses</label>
                    <br />
                    <ol style="margin-left: -25px;">
                        <li>
                            Akses menu home. Aksi yang diperbolehkan : Read
                        </li>
                        <li>
                            Akses menu siswa. Aksi yang diperbolehkan : Read, Update, Delete
                        <li>
                            Akses menu guru. Aksi yang diperbolehkan : Read
                        </li>
                    </ol>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>