<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Alat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Alat</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('Alat/update'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $errors = session()->getFlashdata('errors');
                                if (!empty($errors)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Whoops! Ada kesalahan saat input data, yaitu:
                                        <ul>
                                            <?php foreach ($errors as $error) : ?>
                                                <li><?= esc($error) ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>

                                <input type="hidden" name="alat_id" value="<?php echo $alat['alat_id']; ?>">

                                <div class="form-group">
                                    <label for="alat_nama">Nama Pelanggan</label>
                                    <input type="text" value="<?= $alat['alat_nama'] ?>" class="form-control" name="alat_nama" placeholder="nama">
                                </div>

                                <div class="form-group">
                                    <label for="alat_status">Status Alat</label>
                                    <select name="alat_status" id="alat_status" class="form-control">
                                        <option value="">status</option>
                                        <option value="masuk" <?= $alat['alat_status'] == "masuk" ? "selected" : "" ?>>masuk</option>
                                        <option value="keluar" <?= $alat['alat_status'] == "keluar" ? "selected" : "" ?>>keluar</option>
                                        value="<?= $alat['alat_status'] ?>"
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="alat_kondisi">Kondisi alat</label>
                                    <select name="alat_kondisi" id="alat_kondisi" class="form-control">
                                        <option value="">kondisi</option>
                                        <option value="baik" <?= $alat['alat_kondisi'] == 'baik' ? 'selected' : '' ?>>Baik</option>
                                        <option value="rusak" <?= $alat['alat_kondisi'] == 'rusak' ? 'selected' : '' ?>>Rusak</option>
                                        <option value="dalam perbaikan" <?= $alat['alat_kondisi'] == 'dalam perbaikan' ? 'selected' : '' ?>>Dalam Perbaikan</option>
                                        value="<?= $alat['alat_kondisi'] ?>"
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('alat'); ?>" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary float-right">update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('_partials/footer'); ?>
