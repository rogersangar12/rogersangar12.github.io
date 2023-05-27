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
                        <form action="<?= BASEURL; ?>/pengeluaran_infaq/ubahpengeluaran_infaq" method="post">
                            <input type="hidden" name="id" value="<?= $data['pengeluaran_infaq']['id']; ?>">
                            <div class="mb-3 row">
                                <label for="bulan" class="col-sm-3 col-form-label">Bulan</label>
                                <div class="col-sm-9">
                                    <input type="month" class="form-control" name="bulan" placeholder="<?= $data['pengeluaran_infaq']['bulan']; ?>" id="nama" value="<?= $data['pengeluaran_infaq']['bulan']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="pengeluaran" class="col-sm-3 col-form-label">pengeluaran</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="pengeluaran" placeholder="pengeluaran" id="pengeluaran" value="<?= $data['pengeluaran_infaq']['pengeluaran']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                            <div class="mb-3 row">
                                <a href="<?= BASEURL; ?>/pengeluaran_infaq/index/" class="btn btn-danger">Kembali</a>
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