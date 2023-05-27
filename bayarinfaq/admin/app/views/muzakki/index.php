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
                        <button type="button" class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#formModal"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                            </span>Tambah</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Kartu Keluarga</th>
                                        <th>Nama</th>
                                        <th>Tanggungan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data['muzakki'] as $muzakki) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $muzakki["no_kk"]; ?></td>
                                            <td><?= $muzakki["nama"]; ?></td>
                                            <td><?= $muzakki["jumlah_tanggungan"]; ?></td>
                                            <td>
                                                <a href="<?= BASEURL; ?>/muzakki/detail/<?= $muzakki['id']; ?>" class="badge bg-success float-right">detail</a>
                                                <a href="<?= BASEURL; ?>/muzakki/upload/<?= $muzakki['id']; ?>" class="badge bg-primary float-right">ubah</a>
                                                <a href="<?= BASEURL; ?>/muzakki/hapus/<?= $muzakki['id']; ?>" class="badge bg-danger float-right" data-bs-toggle="modal" data-bs-target="#hapus-<?= $muzakki['id']; ?>">hapus</a>
                                            </td>
                                            <div class="modal fade" id="hapus-<?= $muzakki['id']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="judulModal">Hapus Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                Apakah Yakin ingin menghapus <strong><?= $muzakki["nama"]; ?>?</strong>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <a href="<?= BASEURL; ?>/muzakki/hapus/<?= $muzakki['id']; ?>" class="btn btn-danger">Hapus Data</a>
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
                                        <th>Tanggungan</th>
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
                <form action="<?= BASEURL; ?>/muzakki/tambah" method="post">
                    <!-- <input type="hidden" name="jenis_bayar" value="">
                    <input type="hidden" name="bayar_tanggungan" value="">
                    <input type="hidden" name="bayar_beras" value="">
                    <input type="hidden" name="bayar_beras" value="">
                    <input type="hidden" name="bayar_uang" value="">
                    <input type="hidden" name="status" value="Belum Bayar"> -->
                    <div class="mb-3 row">
                        <label for="no_kk" class="col-sm-3 col-form-label">No. Kartu Keluarga</label>
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
                        <label class="col-sm-3 col-form-label" for="jumlah_tanggungan">Jumlah Tanggungan</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="jumlah_tanggungan" placeholder="0" id="jumlah_tanggungan" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <select id="keterangan" name="keterangan" class="form-select" required>
                                <option value='Warga Tetap'>Warga Tetap</option>
                                <option value='Bukan Warga Tetap'>Bukan Warga Tetap</option>
                            </select>
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