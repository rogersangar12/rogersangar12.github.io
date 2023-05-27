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
                        <form action="<?= BASEURL; ?>/mustahik/ubah" method="post">
                            <input type="hidden" name="id" value="<?= $data['mustahik']['id']; ?>">
                            <div class="mb-3 row">
                                <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                                <div class="col-sm-9">
                                    <select id="kategori" name="kategori" class="form-select" value="<?= $data['mustahik']['kategori']; ?>" required>
                                        <option value='<?= $data['mustahik']['kategori']; ?>'><?= $data['mustahik']['kategori']; ?></option>
                                        <option value='Fakir'>Al-Fuqara (Fakir)</option>
                                        <option value='Miskin'>Al-Masakin (Miskin)</option>
                                        <option value='Panitia Zakat'>Al-Amilin (Panitia Zakat)</option>
                                        <option value='Mualaf'>Mualaf</option>
                                        <option value='Budak'>Dzur Riqab (Budak)</option>
                                        <option value='Berutang'>Algharim (Berutang)</option>
                                        <option value='Fisabilillah'>Fisabilillah Al-Muhajidin (Pejuang Islam)</option>
                                        <option value='Ibnu Sabil'>Ibnu Sabil </option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="jumlah_hak">Jumlah Hak</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="jumlah_hak" placeholder="0" id="jumlah_hak" value="<?= $data['mustahik']['jumlah_hak']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </div>
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