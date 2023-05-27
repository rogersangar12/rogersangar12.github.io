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
                        <form action="<?= BASEURL; ?>/bayar_zakat/bayar" method="post">
                            <input type="hidden" name="id" value="<?= $data['bayar_zakat']['id']; ?>">
                            <input type="hidden" name="status" value="Sudah Bayar">
                            <div class="mb-3 row">
                                <label for="no_kk" class="col-sm-3 col-form-label">No. Kartu Keluarga</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="no_kk" id="no_kk" value="<?= $data['bayar_zakat']['no_kk']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama" id="nama" value="<?= $data['bayar_zakat']['nama']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="jumlah_tanggungan">Jumlah Tanggungan</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="jumlah_tanggungan" placeholder="0" id="jumlah_tanggungan" value="<?= $data['bayar_zakat']['jumlah_tanggungan']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="jenis_bayar">Jenis Bayar</label>
                                <div class="col-sm-9">
                                    <select id="jenis_bayar" name="jenis_bayar" class="form-select" value="<?= $data['bayar_zakat']['jenis_bayar']; ?>" required>
                                        <option value='Beras'>Beras</option>
                                        <option value='Uang'>Uang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="bayar_tanggungan">Jumlah Tanggungan yang Dibayar</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="bayar_tanggungan" placeholder="0" id="bayar_tanggungan" value="" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="bayar_beras">Bayar infaq</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="bayar_beras" placeholder="0" id="bayar_beras" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="bayar_uang">Bayar Uang</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="bayar_uang" placeholder="0" id="bayar_uang" value="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <button type="submit" class="btn btn-primary">Bayar</button>
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