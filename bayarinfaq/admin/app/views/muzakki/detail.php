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
                                        <td>Nama</td>
                                        <td><?= $data['muzakki']['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Tanggungan</td>
                                        <td> <?= $data['muzakki']['jumlah_tanggungan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td><?= $data['muzakki']['keterangan']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="card-footer bg-transparent border-0 text-white"><a href="<?= BASEURL; ?>/muzakki/index/"><button type="button" class="btn btn-primary">Kembali</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>