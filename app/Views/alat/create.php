<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Alat Pesta</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Alat Pesta</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('Alat/store'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $inputs = session()->getFlashdata('inputs');
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



                                <div class="form-group">
                                    <label for="alat_nama">Nama Alat Pesta</label>
                                    <input type="text" class="form-control" name="alat_nama" placeholder="nama" value="<?php echo old('alat_nama'); ?>">
                                    <?php if (isset($errors['alat_nama'])) { ?>
                                        <p class="text-danger"><?php echo $errors['alat_nama']; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label for="alat_status">Status Alat</label>
                                    <select name="alat_status" id="alat_status" class="form-control">
                                        <option value="">status</option>
                                        <option value="masuk" <?php echo $inputs['alat_status'] == "masuk" ? "selected" : ""; ?>>Masuk</option>
                                        <option value="keluar" <?php echo $inputs['alat_status'] == "keluar" ? "selected" : ""; ?>>Keluar</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="alat_kondisi">Kondisi Alat</label>
                                    <select name="alat_kondisi" id="alat_kondisi" class="form-control">
                                        <option value="">kondisi</option>
                                        <option value="baik" <?php echo old('alat_kondisi') == 'baik' ? 'selected' : ''; ?>>Baik</option>
                                        <option value="rusak" <?php echo old('alat_kondisi') == 'rusak' ? 'selected' : ''; ?>>Rusak</option>
                                        <option value="dalam perbaikan" <?php echo old('alat_kondisi') == 'dalam perbaikan' ? 'selected' : ''; ?>>Dalam Perbaikan</option>
                                    </select>
                                    <?php if (isset($errors['alat_kondisi'])) { ?>
                                        <p class="text-danger"><?php echo $errors['alat_kondisi']; ?></p>
                                    <?php } ?>
                                </div>
                                </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('alat'); ?>" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('_partials/footer'); ?>
