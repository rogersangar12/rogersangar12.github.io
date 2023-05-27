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
                        <a href="<?= BASEURL; ?>/bayar_infaq/sudah_bayar/" class="btn btn-rounded btn-warning"><span class="btn-icon-start text-primary"><i class="bi bi-check2-square fa-lg"></i>
                            </span>Daftar Sudah Bayar</a>
                        <a href="<?= BASEURL; ?>/bayar_infaq/print/" class="btn btn-rounded btn-primary" target="_blank"><span class="btn-icon-start text-primary"><i class="bi bi-printer-fill fa-lg"></i>
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
                                        <th>Bulan</th>
                                        <th>Pemasukan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data['bayar_infaq'] as $bayar_infaq) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $bayar_infaq["bulan"]; ?></td>
                                            <td><?= $bayar_infaq["pemasukan"]; ?></td>
                                            <td>
                                                
                                                <a href="<?= BASEURL; ?>/bayar_infaq/upload/<?= $bayar_infaq['id']; ?>" class="badge bg-primary float-right">ubah</a>
                                                <button type="submit" class="badge bg-danger float-right" data-bs-toggle="modal" data-bs-target="#hapus-<?= $bayar_infaq['id']; ?>">hapus</button>
                                                
                                            </td>
                                            <div class="modal fade" id="hapus-<?= $bayar_infaq['id']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="judulModal">Hapus Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                Apakah Yakin ingin menghapus <strong><?= $bayar_infaq["bulan"]; ?>?</strong>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <a href="<?= BASEURL; ?>/bayar_infaq/hapus/<?= $bayar_infaq['id']; ?>" class="btn btn-danger">Hapus Data</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="tambah-<?= $bayar_infaq['id']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <strong>
                                                                <h5 class="modal-title" id="judulModal">Pembayaran</h5>
                                                            </strong>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= BASEURL; ?>/bayar_infaq/hapus" method="post">
                                                                <input type="hidden" name="status" value="Sudah Bayar">
                                                                <input type="hidden" name="no_kk" value="<?= $bayar_infaq['no_kk']; ?>">
                                                                <input type="hidden" name="nama" value="<?= $bayar_infaq['nama']; ?>">
                                                                <strong>
                                                                    <div class="mb-3 row">
                                                                        <label for="no_kk" class="col-sm-3 col-form-label">Bulan</label>
                                                                        <div class="col-sm-9">
                                                                            <?= $bayar_infaq['bulan']; ?>
                                                                        </div>
                                                                    </div>
                                                                </strong>
                                                                <strong>
                                                                    <div class="mb-3 row">
                                                                        <label for="nama" class="col-sm-3 col-form-label">Pemasukan</label>
                                                                        <div class="col-sm-9">
                                                                            <?= $bayar_infaq['pemasukan']; ?>
                                                                        </div>
                                                                    </div>
                                                                </strong>
                                                                <strong>
                                                                    <div class="mb-3 row">
                                                                        <label class="col-sm-3 col-form-label" for="jumlah_tanggungan">Jumlah Tanggungan</label>
                                                                        <div class="col-sm-9">
                                                                            <?= $bayar_infaq['jumlah_tanggungan']; ?>
                                                                        </div>
                                                                    </div>
                                                                </strong>
                                                                <div class="mb-3 row">
                                                                    <label class="col-sm-3 col-form-label" for="jenis_bayar">Jenis Bayar</label>
                                                                    <div class="col-sm-9">
                                                                        <select id="jenis_bayar" name="jenis_bayar" class="form-select" required>
                                                                            <option value='Beras'>Beras</option>
                                                                            <option value='Uang'>Uang</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label class="col-sm-3 col-form-label" for="bayar_tanggungan">Jumlah Tanggungan yang Dibayar</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" class="form-control" name="bayar_tanggungan" placeholder="0" id="bayar_tanggungan" required>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label class="col-sm-3 col-form-label" for="bayar_beras">Bayar Beras</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="month" class="form-control" name="bayar_beras" placeholder="0" id="bayar_beras">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label class="col-sm-3 col-form-label" for="bayar_uang">Bayar Uang</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" class="form-control" name="bayar_uang" placeholder="0" id="bayar_uang" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Bayar</button>
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
                                        <th>Bulan</th>
                                        <th>Pemasukan</th>
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
                <form action="<?= BASEURL; ?>/bayar_infaq/tambah" method="post">
                    <div class="mb-3 row">
                        <label for="no_kk" class="col-sm-3 col-form-label">Bulan</label>
                        <div class="col-sm-9">
                            <input type="month" class="form-control" name="bulan"  id="bulan" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pemasukan" class="col-sm-3 col-form-label">Pemasukan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="pemasukan" placeholder="pemasukan" id="pemasukan" required>
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