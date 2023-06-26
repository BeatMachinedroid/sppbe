
<?= $this->include('layout/header/header') ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Laporan</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(
                                        'dashboard'
                                    ) ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Laporan</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <a href="<?= base_url('pdf'); ?>" class="btn btn-primary btn-sm btn-addon">
                                            <i class="ti-download"></i>PDF
                                        </a>
                                        <button onclick="window.print()" class="btn btn-primary btn-sm btn-addon">
                                            <i class="ti-printer"></i>PRINT
                                        </button>
                                    </div>
                                    <div class="col-sm-6 ">
                                    <?php
                                        $total = 0;
                                            foreach ($laporan1 as $item2) {
                                                    $total += $item2['total_masuk'];}
                                                            ?><?php
                                        $total1 = 0;
                                            foreach ($laporan2 as $item3) {
                                                    $total1 += $item3['total'];}
                                                            
                                                            if($total - $total1 < 0 ) {?>
                                            <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
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
                                        <form action="<?= base_url('dashboard/kas/laporan/search') ?>" method="post" class="form-inline">
                                            <input type="date" class="form-control" name="tanggal" required>
                                            <button type="submit" class="btn btn-primary"><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                            <div class="card-body">
                                                <div class="table-responsive table-bordered">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <!-- <th class="text-center">Tanggal</th> -->
                                                                <th class="text-center">Keterangan</th>
                                                                <th class="text-center">Debit</th>
                                                                <th class="text-center">Kredit</th>
                                                                <th class="text-center">Saldo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            
                                                            <th colspan="4" class="text-center text-black font-weight-bold">Tanggal : 
                                                                <?= date('d  M  Y',strtotime( $tanggal)) ?>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="4" class="text-center text-black font-weight-bold">Kas Masuk</th>
                                                        </tr>
                                                        <tr>
                                                        <?php foreach (
                                                            $laporan1
                                                            as $item
                                                        ): ?>
                                                            <tr> 
                                                            <th class="text-center"><?= $item[
                                                                'keterangan'
                                                            ] ?></th>
                                                            <th class="text-center">Rp.<?= $item[
                                                                'total_masuk'
                                                            ] ?></th>
                                                            <th></th>
                                                            <th></th>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3" class="text-center bg-primary text-white font-weight-bold">Jumlah Kas masuk</th>
                                                            <?php
                                                            $total = 0;
                                                            foreach (
                                                                $laporan1
                                                                as $item2
                                                            ) {
                                                                $total +=
                                                                    $item2[
                                                                        'total_masuk'
                                                                    ];
                                                            }
                                                            ?>
                                                                <th class="text-center bg-primary text-white font-weight-bold">Rp.<?= $total ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="4" class="text-center text-black font-weight-bold">Kas keluar</th>
                                                        </tr>
                                                        <tr>
                                                        <?php foreach (
                                                            $laporan2
                                                            as $item3
                                                        ): ?>
                                                            <tr> 
                                                            <th colspan="2" class="text-center"><?= $item3[
                                                                'keterangan'
                                                            ] ?></th>
                                                            <th class="text-center">Rp.<?= $item3[
                                                                'total'
                                                            ] ?></th>
                                                            <!-- <th colspan="2"></th> -->
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3" class="text-center bg-primary text-white font-weight-bold">Jumlah Kas keluar</th>
                                                            <?php
                                                            $total1 = 0;
                                                            foreach (
                                                                $laporan2
                                                                as $item3
                                                            ) {
                                                                $total1 +=
                                                                    $item3[
                                                                        'total'
                                                                    ];
                                                            }
                                                            ?>
                                                                <th class="text-center bg-primary text-white font-weight-bold">Rp.<?= $total1 ?></th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3" class="text-center bg-primary text-white font-weight-bold">Total Saldo</th>
                                                        
                                                                <th class="text-center bg-primary text-white font-weight-bold">Rp.<?= $total -
                                                                    $total1 ?></th>
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
                