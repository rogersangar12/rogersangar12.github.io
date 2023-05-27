<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body mb-3">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel1</a></li>
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
                                        <td><?= $data['bayar_zakat']['no_kk']; ?></td>
                                    </tr>
                                    <td>Nama</td>
                                    <td><?= $data['bayar_zakat']['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Tanggungan</td>
                                        <td> <?= $data['bayar_zakat']['jumlah_tanggungan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td> <?= $data['bayar_zakat']['keterangan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Bayar</td>
                                        <td> <?= $data['bayar_zakat']['jenis_bayar']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Tanggungan yang dibayar</td>
                                        <td> <?= $data['bayar_zakat']['bayar_tanggungan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Bayar Beras</td>
                                        <td> <?= $data['bayar_zakat']['bayar_beras']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Bayar Uang</td>
                                        <td> <?= $data['bayar_zakat']['bayar_uang']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td><?= $data['bayar_zakat']['status']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="card-footer bg-transparent border-0 text-white"><a href="<?= BASEURL; ?>/bayar_zakat/sudah_bayar/"><button type="button" class="btn btn-primary">Kembali</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>