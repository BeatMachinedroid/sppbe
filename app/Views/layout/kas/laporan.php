<?= $this->include('layout/header/header') ?>

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                        href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Laporan</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0 pt-2">Laporan</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0  me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div> -->
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none"><?= session()->get('username') ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9">
                            <a class="btn btn-primary btn-sm btn-addon" onclick="printPdf()" style="color:white">
                                <i class="ti-download"></i>PDF
                            </a>
                            <!-- <button onclick="printPdf()">Print PDF</button> -->
                            <button onclick="window.print()" class="btn btn-primary btn-sm btn-addon">
                                <i class="ti-printer"></i>PRINT
                            </button>
                        </div>
                        <!--  -->
                        <div class="col-sm-3">
                            <form action="<?= base_url('dashboard/kas/laporan/search') ?>" method="get"
                                id="search">
                                <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                                <!-- <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button> -->
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body">
                                <h1 style="text-align: center">PT Karunia Ulul Azmi</h1>
                                <p class="text-right"></p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th
                                                class="text-center text-uppercase font-weight-bolder bg-primary text-white">
                                                No</th>
                                            <th
                                                class="text-center text-uppercase font-weight-bolder bg-primary text-white">
                                                Tanggal</th>
                                            <th
                                                class="text-center text-uppercase font-weight-bolder bg-primary text-white">
                                                Keterangan</th>
                                            <th
                                                class="text-center text-uppercase font-weight-bolder bg-primary text-white">
                                                masuk</th>
                                            <th
                                                class="text-center text-uppercase font-weight-bolder bg-primary text-white">
                                                keluar</th>
                                            <th
                                                class="text-center text-uppercase font-weight-bolder bg-primary text-white">
                                                Total saldo</th>
                                        </thead>
                                        <tbody>
                                            <?php $no=1 ; foreach ($laporan as $item): ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td><?= $item['tanggal'] ?></td>
                                                <td><?= $item['keterangan'] ?></td>
                                                <td>
                                                    <?php
                                                    $totalMasuk = 0;
                                                    foreach ($item['masuk'] as $masukItem) {
                                                        echo 'Rp.'.$masukItem['total_masuk'] . '<br>';
                                                        $totalMasuk += $masukItem['total_masuk'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $totalKeluar = 0;
                                                    foreach ($item['keluar'] as $keluarItem) {
                                                        echo 'Rp.'. $keluarItem['total_keluar'] . '<br>';
                                                        $totalKeluar += $keluarItem['total_keluar'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>Rp.<?= $totalMasuk - $totalKeluar ?></td>
                                            </tr>
                                            <?php endforeach;?>
                                            <tr>
                                                <th colspan="3" class="text-center">Total</th>
                                                <?php 
                                                    $masuk = 0;
                                                    foreach ($laporanmasuk as $total){
                                                        $masuk += $total['total_masuk'];
                                                    }
                                                    $keluar = 0;
                                                    foreach ($laporankeluar as $totall) {
                                                        $keluar += $totall['total_keluar'];
                                                    }
                                                ?>
                                                <th>Rp.<?= $masuk ?></th>
                                                <th>Rp.<?= $keluar ?></th>
                                                <th>Rp.<?= $masuk - $keluar; ?></th>
                                            </tr>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('layout/header/footer') ?>
    <script>
        function printPdf() {
            // Ganti dengan URL halaman yang menghasilkan PDF
            var pdfUrl = '/pdf?tanggal=';
            window.open(pdfUrl, '_blank');
        }
    </script>
