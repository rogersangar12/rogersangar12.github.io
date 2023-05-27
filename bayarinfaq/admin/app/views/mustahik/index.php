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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Table <?= $data['judul']; ?></h4>
                        <button type="button" class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#formModal"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                            </span>Tambah</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data['mustahik'] as $mustahik) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $mustahik["kategori"]; ?></td>
                                            <td>
                                                <a href="<?= BASEURL; ?>/mustahik/detail/<?= $mustahik['id']; ?>" class="badge bg-success float-right">detail</a>
                                                <a href="<?= BASEURL; ?>/mustahik/upload/<?= $mustahik['id']; ?>" class="badge bg-primary float-right">ubah</a>
                                                <a href="<?= BASEURL; ?>/mustahik/hapus/<?= $mustahik['id']; ?>" class="badge bg-danger float-right" data-bs-toggle="modal" data-bs-target="#hapus-<?= $mustahik['id']; ?>">hapus</a>
                                            </td>
                                            <div class="modal fade" id="hapus-<?= $mustahik['id']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="judulModal">Hapus Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                Apakah Yakin ingin menghapus <strong><?= $mustahik["kategori"]; ?>?</strong>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <a href="<?= BASEURL; ?>/mustahik/hapus/<?= $mustahik['id']; ?>" class="btn btn-danger">Hapus Data</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal"><b>Tambah Data <?= $data['judul']; ?></b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mustahik/tambah" method="post">
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select id="kategori" name="kategori" class="form-select" required>
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
                            <input type="number" class="form-control" name="jumlah_hak" placeholder="0" id="jumlah_hak" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>