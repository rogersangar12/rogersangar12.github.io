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
                        <form action="<?= BASEURL; ?>/muzakki/ubah" method="post">
                            <input type="hidden" name="id" value="<?= $data['muzakki']['id']; ?>">
                            <input type="hidden" name="no_kk" value="<?= $data['muzakki']['no_kk']; ?>">
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama" id="nama" value="<?= $data['muzakki']['nama']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="jumlah_tanggungan">Jumlah Tanggungan</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="jumlah_tanggungan" placeholder="0" id="jumlah_tanggungan" value="<?= $data['muzakki']['jumlah_tanggungan']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <select id="keterangan" name="keterangan" class="form-select" value="<?= $data['muzakki']['keterangan']; ?>" required>
                                        <option value='<?= $data['muzakki']['keterangan']; ?>'><?= $data['muzakki']['keterangan']; ?></option>
                                        <option value='Warga Tetap'>Warga Tetap</option>
                                        <option value='Bukan Warga'>Bukan Warga Tetap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                            <div class="mb-3 row">
                                <a href="<?= BASEURL; ?>/muzakki/index" class="btn btn-danger">Kembali</a>
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