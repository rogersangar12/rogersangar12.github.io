<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $data['judul']; ?></a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="col-xl-6 col-lg-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"><?= $data['judul']; ?></h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="<?= BASEURL; ?>/bayar_infaq/ubahbayar_infaq" method="post">
                            <input type="hidden" name="id" value="<?= $data['bayar_infaq']['id']; ?>">
                            <div class="mb-3 row">
                                <label for="bulan" class="col-sm-3 col-form-label">Bulan</label>
                                <div class="col-sm-9">
                                    <input type="month" class="form-control" name="bulan" placeholder="<?= $data['bayar_infaq']['bulan']; ?>" id="nama" value="<?= $data['bayar_infaq']['bulan']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="pemasukan" class="col-sm-3 col-form-label">pemasukan</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="pemasukan" placeholder="pemasukan" id="pemasukan" value="<?= $data['bayar_infaq']['pemasukan']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                            <div class="mb-3 row">
                                <a href="<?= BASEURL; ?>/bayar_infaq/index/" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->