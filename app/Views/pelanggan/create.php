<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Pelanggan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Pelanggan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('Pelanggan/store'); ?>" method="post">
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
                                    <label for="PestaPelanggan_Nama">Nama Pelanggan</label>
                                    <input type="text" class="form-control" name="PestaPelanggan_Nama" placeholder="nama" value="<?php echo esc($inputs['PestaPelanggan_Nama']); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="PestaPelanggan_Alamat">Alamat Pelanggan</label>
                                    <input type="text" class="form-control" name="PestaPelanggan_Alamat" placeholder="alamat" value="<?php echo esc($inputs['PestaPelanggan_Alamat']); ?>">
                                </div>

                                <div class="form-group">
                                <label for="PestaPelanggan_Tgl">Tanggal</label>
                                <input type="date" class="form-control" name="PestaPelanggan_Tgl" placeholder="tanggal" value="<?php echo esc($inputs['PestaPelanggan_Tgl']); ?>">
                            </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('pelanggan'); ?>" class="btn btn-outline-info">Back</a>
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
