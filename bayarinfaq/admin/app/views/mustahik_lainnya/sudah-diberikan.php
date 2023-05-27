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
                        <h4 class="card-title">Table Data <?= $data['judul']; ?></h4>
                        <a href="<?= BASEURL; ?>/mustahik_lainnya/index/" class="btn btn-rounded btn-primary"><span class="btn-icon-start text-primary"><i class="bi bi-clipboard2-x-fill fa-lg"></i>
                            </span>Daftar Zakat Belum Diberikan</a>
                        <a href="<?= BASEURL; ?>/mustahik_warga/print/" class="btn btn-rounded btn-primary" target="_blank"><span class="btn-icon-start text-primary"><i class="bi bi-printer-fill fa-lg"></i>
                            </span>Report</a>
                        <button type="button" class="btn btn-rounded btn-info btn-danger" data-bs-toggle="modal" data-bs-target="#formModal"><span class="btn-icon-start text-info"><i class="bi bi-trash3-fill fa-lg"></i>
                            </span>Hapus Semua</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Kartu Keluarga</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Hak</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data['mustahik_lainnya'] as $mustahik_lainnya) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $mustahik_lainnya["no_kk"]; ?></td>
                                            <td><?= $mustahik_lainnya["nama"]; ?></td>
                                            <td><?= $mustahik_lainnya["kategori"]; ?></td>
                                            <td><?= $mustahik_lainnya["hak"]; ?></td>
                                            <td><?= $mustahik_lainnya["status"]; ?></td>
                                            <td>
                                                <button type="sumbit" class="badge bg-danger float-right" data-bs-toggle="modal" data-bs-target="#hapus-<?= $mustahik_lainnya['id']; ?>">hapus</button>
                                            </td>
                                            <div class="modal fade" id="hapus-<?= $mustahik_lainnya['id']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <strong>
                                                                <h5 class="modal-title" id="judulModal">Hapus</h5>
                                                            </strong>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= BASEURL; ?>/mustahik_lainnya/hapussudah" method="post">
                                                                <input type="hidden" name="status" value="Belum Diberikan">
                                                                <input type="hidden" name="id" value="<?= $mustahik_lainnya['id']; ?>">
                                                                <input type="hidden" name="no_kk" value="<?= $mustahik_lainnya['no_kk']; ?>">
                                                                <input type="hidden" name="nama" value="<?= $mustahik_lainnya['nama']; ?>">
                                                                <input type="hidden" name="kategori" value="<?= $mustahik_lainnya['kategori']; ?>">
                                                                <input type="hidden" name="hak" value="<?= $mustahik_lainnya['hak']; ?>">
                                                                <strong>
                                                                    <div class="mb-3 row">
                                                                        <label for="no_kk" class="col-sm-3 col-form-label">NIK</label>
                                                                        <div class="col-sm-9">
                                                                            <?= $mustahik_lainnya['no_kk']; ?>
                                                                        </div>
                                                                    </div>
                                                                </strong>
                                                                <strong>
                                                                    <div class="mb-3 row">
                                                                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                                                        <div class="col-sm-9">
                                                                            <?= $mustahik_lainnya['nama']; ?>
                                                                        </div>
                                                                    </div>
                                                                </strong>
                                                                <strong>
                                                                    <div class="mb-3 row">
                                                                        <label class="col-sm-3 col-form-label" for="kategori">Kategori</label>
                                                                        <div class="col-sm-9">
                                                                            <?= $mustahik_lainnya['kategori']; ?>
                                                                        </div>
                                                                    </div>
                                                                </strong>
                                                                <strong>
                                                                    <div class="mb-3 row">
                                                                        <label class="col-sm-3 col-form-label" for="hak">Hak Zakat</label>
                                                                        <div class="col-sm-9">
                                                                            <?= $mustahik_lainnya['hak']; ?>
                                                                        </div>
                                                                    </div>
                                                                </strong>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
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
                                        <th>No. Kartu Keluarga</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Hak</th>
                                        <th>Status</th>
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
                <h5 class="modal-title" id="judulModal"><b>Yakin ingin menghapus semua data <?= $data['judul']; ?>?</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                <a href="<?= BASEURL; ?>/mustahik_lainnya/refresh/" class="btn btn-danger">Hapus</a>
            </div>
            </form>
        </div>
    </div>
</div>
</div>