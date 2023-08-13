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
                        <div class="col-lg-3">
                            <a class="btn btn-primary btn-sm btn-addon" onclick="printPdf()" style="color:white">
                                <i class="ti-download"></i>PDF
                            </a>
                            <!-- <button onclick="printPdf()">Print PDF</button> -->
                            <button onclick="window.print()" class="btn btn-primary btn-sm btn-addon">
                                <i class="ti-printer"></i>PRINT
                            </button>
                        </div>
                        <div class="col-sm-6 ">
                            <?php
                            $total = 0;
                                foreach ($MasukIntern as $item2) {
                                    $total += $item2['total_masuk'];
                            }
                            ?><?php
                            $total1 = 0;
                                foreach ($KeluarIntern as $item3) {
                                    $total1 += $item3['total_keluar'];}
                            $total2 = 0;
                                foreach ($MasukExtern as $item4) {
                                    $total += $item4['total_masuk'];
                            }
                            $total3 = 0;
                                foreach ($KeluarExtern as $item5) {
                                    $total += $item5['total_keluar'];
                            }
                            $masuk = $total + $total2;                                
                            $keluar = $total1 + $total3;                                
                            if($masuk - $total1 < 0 ) {?>
                            <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                role="alert" data-brk-library="component__alert">
                                <button type="button" class="close font__size-18" data-dismiss="alert">
                                    <span aria-hidden="true">
                                        <i class="fa fa-times warning"></i>
                                    </span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
                                <strong class="font__weight-semibold">Warning!</strong> Saldo, is't balance!!.
                            </div>
                            <?php }?>
                        </div>
                        <div class="col-sm-3">
                            <form action="<?= base_url('dashboard/kas/laporan/search') ?>" method="get" id="search">
                                <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                                <!-- <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button> -->
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body">
                                <h1 style="text-align: center">PT Karunia Ulul Azmi</h1>
                                <p class="text-right">Tanggal : <?= date('d  M  Y', strtotime($tanggal)) ?></p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                            <thead>
                                                <th class="text-center text-uppercase font-weight-bolder bg-primary text-white" colspan="3">Uraian</th>
                                                <th class="text-center text-uppercase font-weight-bolder bg-primary text-white">Jumlah</th>
                                            </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-left text-uppercase text-xs font-weight-bolder" colspan="4">Kas Masuk</th>
                                            </tr>
                                            <?php
                                                $TotalIntern = 0;
                                                foreach ($MasukIntern as $itemMsi) { $TotalIntern += $itemMsi['total_masuk'];}?>
                                            <tr>
                                                <th></th>
                                                <th colspan="2" class="text-left text-uppercase text-xs font-weight-bolder">Internal</th>
                                                <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. <?= $TotalIntern; ?></th>
                                            </tr>
                                            <?php if (empty($TotalIntern)) { ?>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-left text-uppercase text-xs font-weight-bolder">-</th>
                                                    <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. 0</th>
                                                </tr>
                                                <?php } else {?>
                                            <?php foreach ($MasukIntern as $itemmasuk): ?>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-left text-uppercase text-xs font-weight-bolder"><?= $itemmasuk['keterangan']; ?></th>
                                                    <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. <?= $itemMsi['total_masuk']; ?></th>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php }?>
                                            <tr>
                                            <?php
                                                $TotalExtern = 0;
                                                foreach ($MasukExtern as $ItemExtern) { $TotalExtern += $ItemExtern['total_masuk'];}?>
                                                <th></th>
                                                <th colspan="2" class="text-left text-uppercase text-xs font-weight-bolder">External</th>
                                                <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. <?= $TotalExtern; ?></th>
                                            </tr>
                                            <?php if (empty($MasukExtern)) { ?>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-left text-uppercase text-xs font-weight-bolder">-</th>
                                                    <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. 0</th>
                                                </tr>
                                                <?php } else {?>
                                            <?php foreach ($MasukExtern as $ItemExtern): 
                                                
                                                ?>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-left text-uppercase text-xs font-weight-bolder"><?= $ItemExtern['keterangan']; ?></th>
                                                    <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. <?= $ItemExtern['total_masuk']; ?></th>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php }?>
                                            <tr>
                                                <th colspan="3"
                                                    class="text-center text-uppercase bg-primary text-white font-weight-bold">Jumlah
                                                    Kas masuk</th>
                                                <th class="text-right text-uppercase bg-primary text-white font-weight-bold">
                                                    Rp. <?= $TotalIntern + $TotalExtern; ?></th>
                                            </tr>
                                            <tr>
                                                <th class="text-left text-uppercase text-xs font-weight-bolder" colspan="4">Kas Keluar</th>
                                            </tr>
                                            <tr>
                                            <?php
                                                $TotalKelIntern = 0;
                                                foreach ($KeluarIntern as $ItemKasIntern) { $TotalKelIntern += $ItemKasIntern['total_keluar'];}?>
                                                <th></th>
                                                <th colspan="2" class="text-left text-uppercase text-xs font-weight-bolder">Internal</th>
                                                <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. <?= $TotalKelIntern; ?></th>
                                            </tr>
                                            <?php if (empty($KeluarIntern)) { ?>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-left text-uppercase text-xs font-weight-bolder">- </th>
                                                    <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. 0</th>
                                                </tr>
                                                <?php } else {?>
                                            <?php foreach ($KeluarIntern as $ItemKasIntern): ?>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-left text-uppercase text-xs font-weight-bolder"><?= $ItemKasIntern['keterangan']; ?></th>
                                                    <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. <?= $ItemKasIntern['total_keluar']; ?></th>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php }?>
                                            <tr>
                                            <?php
                                                $TotalKelExtern = 0;
                                                foreach ($KeluarExtern as $ItemKelExtern) { $TotalKelExtern += $ItemKelExtern['total_keluar'];}?>
                                                <th></th>
                                                <th colspan="2" class="text-left text-uppercase text-xs font-weight-bolder">External</th>
                                                <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. <?= $TotalKelExtern; ?></th>
                                            </tr>
                                            
                                            <?php if (empty($KeluarExtern)) { ?>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-left text-uppercase text-xs font-weight-bolder">-</th>
                                                    <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. 0</th>
                                                </tr>
                                                <?php } else {?>
                                            <?php foreach ($KeluarExtern as $ItemKelExtern): ?>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-left text-uppercase text-xs font-weight-bolder"><?= $ItemKelExtern['keterangan']; ?></th>
                                                    <th class="text-right text-uppercase text-xs font-weight-bolder">Rp. <?= $ItemKelExtern['total_keluar']; ?></th>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php }?>
                                           
                                            </tr>
                                            <tr>
                                                <th colspan="3"
                                                    class="text-center text-uppercase bg-primary text-white font-weight-bold">Jumlah
                                                    Kas keluar</th>
                                                
                                                <th class="text-right text-uppercase bg-primary text-white font-weight-bold">
                                                    Rp. <?= $TotalKelIntern + $TotalKelExtern; ?></th>
                                            </tr>
                                            <tr>
                                                <th colspan="3"
                                                    class="text-center text-uppercase bg-primary text-white font-weight-bold">Total
                                                    Saldo</th>

                                                <th class="text-right text-uppercase bg-primary text-white font-weight-bold">
                                                    <?php 
                                                        $kaskeluar = $TotalKelIntern + $TotalKelExtern;
                                                        $kasmasuk = $TotalIntern + $TotalExtern;
                                                    ?>
                                                    Rp. <?= $kasmasuk - $kaskeluar  ?></th>
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
            var pdfUrl = '/pdf?tanggal=<?= date('Y-m-d', strtotime($tanggal)) ?>';
            window.open(pdfUrl, '_blank');
        }
    </script>
