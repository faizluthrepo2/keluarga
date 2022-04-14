<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Keluarga</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa isian form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('keluarga/update/' . $keluarga->id) ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $keluarga->nama; ?>">
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                        <option value="laki-laki" <?= ($keluarga->jenis_kelamin == "laki-laki" ? "selected" : ""); ?>>Laki-laki</option>
                        <option value="perempuan" <?= ($keluarga->jenis_kelamin == "perempuan" ? "selected" : ""); ?>>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="level">Level</label>
                    <input type="text" class="form-control" id="level" name="level" value="<?= $keluarga->level; ?>" />
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>