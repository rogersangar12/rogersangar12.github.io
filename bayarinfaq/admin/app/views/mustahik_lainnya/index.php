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
                        <a href="<?= BASEURL; ?>/mustahik_lainnya/sudah_diberikan/" class="btn btn-rounded btn-primary"><span class="btn-icon-start text-primary"><i class="bi bi-check2-square fa-lg"></i>
                            </span>Daftar Zakat Sudah Diberikan</a>
                        <a href="<?= BASEURL; ?>/mustahik_warga/print/" class="btn btn-rounded btn-primary" target="_blank"><span class="btn-icon-start text-primary"><i class="bi bi-printer-fill fa-lg"></i>
                            </span>Report</a>
                        <button type="button" class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#formModal"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                            </span>Tambah</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
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
                                            <td><?= $mustahik_lainnya["status"]; ?></td>
                                            <td>
                                                <a href="<?= BASEURL; ?>/mustahik_lainnya/detail/<?= $mustahik_lainnya['id']; ?>" class="badge bg-success float-right">detail</a>
                                                <button type="sumbit" class="badge bg-danger float-right" data-bs-toggle="modal" data-bs-target="#hapus-<?= $mustahik_lainnya['id']; ?>">hapus</button>
                                                <button type="sumbit" class="badge bg-primary float-right" data-bs-toggle="modal" data-bs-target="#ubah-<?= $mustahik_lainnya['id']; ?>">ubah</button>
                                                <button type="sumbit" class="badge bg-warning float-right" data-bs-toggle="modal" data-bs-target="#berikan-<?= $mustahik_lainnya['id']; ?>">Berikan</button>
                                            </td>
                                            <div class="modal fade" id="hapus-<?= $mustahik_lainnya['id']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="judulModal">Hapus Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                Apakah Yakin ingin menghapus <strong><?= $mustahik_lainnya["nama"]; ?>?</strong>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <a href="<?= BASEURL; ?>/mustahik_lainnya/hapus/<?= $mustahik_lainnya['id']; ?>" class="btn btn-danger">Hapus Data</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="berikan-<?= $mustahik_lainnya['id']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <strong>
                                                                <h5 class="modal-title" id="judulModal">Berikan</h5>
                                                            </strong>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= BASEURL; ?>/mustahik_lainnya/berikan" method="post">
                                                                <input type="hidden" name="status" value="Sudah Diberikan">
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
                                                                    <button type="submit" class="btn btn-primary">Berikan</button>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="ubah-<?= $mustahik_lainnya['id']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <strong>
                                                                <h5 class="modal-title" id="judulModal">Ubah Data</h5>
                                                            </strong>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= BASEURL; ?>/mustahik_lainnya/ubah" method="post">
                                                                <input type="hidden" name="status" value="<?= $mustahik_lainnya['status']; ?>">
                                                                <input type="hidden" name="id" value="<?= $mustahik_lainnya['id']; ?>">

                                                                <strong>
                                                                    <div class="mb-3 row">
                                                                        <label for="no_kk" class="col-sm-3 col-form-label">NIK</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" class="form-control" name="no_kk" id="no_kk" value="<?= $mustahik_lainnya['no_kk']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                </strong>
                                                                <strong>
                                                                    <div class="mb-3 row">
                                                                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $mustahik_lainnya['nama']; ?>" required>
                                                                        </div>
                                                                    </div>
                                                                </strong>
                                                                <div class="mb-3 row">
                                                                    <label class="col-sm-3 col-form-label" for="kategori">Kategori</label>
                                                                    <div class="col-sm-9">
                                                                        <select id="kategori" name="kategori" class="form-select" required>
                                                                            <option value='<?= $mustahik_lainnya['kategori']; ?>'><?= $mustahik_lainnya['kategori']; ?></option>
                                                                            <option value='Amilin'>Amilin</option>
                                                                            <option value='Fisabilillah'>Fisabilillah</option>
                                                                            <option value='Mualaf'>Mualaf</option>
                                                                            <option value='Ibnu Sabil'>Ibnu Sabil</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label class="col-sm-3 col-form-label" for="hak">Hak Zakat</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" class="form-control" name="hak" id="hak" value="<?= $mustahik_lainnya['hak']; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Ubah</button>
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
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
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
                <h5 class="modal-title" id="judulModal"><b>Tambah Data <?= $data['judul']; ?></b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mustahik_lainnya/tambah" method="post">
                    <input type="hidden" name="status" value="Belum Diberikan">
                    <div class="mb-3 row">
                        <label for="no_kk" class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="no_kk" placeholder="3206192045678902" id="no_kk" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" id="nama" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label" for="kategori">Kategori</label>
                        <div class="col-sm-9">
                            <select id="kategori" name="kategori" class="form-select" required>
                                <option value='Amilin'>Amilin</option>
                                <option value='Fisabilillah'>Fisabilillah</option>
                                <option value='Mualaf'>Mualaf</option>
                                <option value='Ibnu Sabil'>Ibnu Sabil</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label" for="hak">Hak Zakat</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="hak" placeholder="0" id="hak" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>