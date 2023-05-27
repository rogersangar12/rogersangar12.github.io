<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body mb-3">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $data['judul']; ?></a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Table <?= $data['judul']; ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <tbody>
                                    <tr>
                                    <tr>
                                        <td>No. KK</td>
                                        <td><?= $data['mustahik_warga']['no_kk']; ?></td>
                                    </tr>
                                    <td>Nama</td>
                                    <td><?= $data['mustahik_warga']['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Tanggungan</td>
                                        <td> <?= $data['mustahik_warga']['jumlah_tanggungan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td> <?= $data['mustahik_warga']['keterangan']; ?></td>
                                    </tr>
                                    </tr>
                            </table>
                            <div class="card-footer bg-transparent border-0 text-white"><a href="<?= BASEURL; ?>/mustahik_warga/index/"><button type="button" class="btn btn-primary">Kembali</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>