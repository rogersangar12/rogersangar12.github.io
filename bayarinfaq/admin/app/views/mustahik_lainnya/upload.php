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
                        <form action="<?= BASEURL; ?>/mustahik_warga/ubahmuzakki" method="post">
                            <input type="hidden" name="id" value="<?= $data['mustahik_warga']['id']; ?>">
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-3 col-form-label">No. Kartu Keluarga</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_kk" placeholder="3206192045678902" id="nama" value="<?= $data['mustahik_warga']['no_kk']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama" id="nama" value="<?= $data['mustahik_warga']['nama']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="jumlah_tanggungan">Jumlah Tanggungan</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="jumlah_tanggungan" placeholder="0" id="jumlah_tanggungan" value="<?= $data['mustahik_warga']['jumlah_tanggungan']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="keterangan">keterangan</label>
                                <div class="col-sm-9">
                                    <select id="keterangan" name="keterangan" class="form-select" value="<?= $data['mustahik_warga']['keterangan']; ?>" required>
                                        <option value='<?= $data['mustahik_warga']['keterangan']; ?>'><?= $data['mustahik_warga']['keterangan']; ?></option>
                                        <option value='Warga Tetap'>Warga Tetap</option>
                                        <option value='Bukan Warga'>Bukan Warga Tetap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                            <div class="mb-3 row">
                                <a href="<?= BASEURL; ?>/mustahik_warga/index/" class="btn btn-danger">Kembali</a>
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