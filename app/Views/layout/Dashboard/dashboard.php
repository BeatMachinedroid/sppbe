<?= $this->include('layout/header/header'); ?>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here <?= session()->get('username'); ?></span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money color-danger border-danger"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Kas</div>
                                        <?php
                                        $total = 0;
                                            foreach ($laporanmasuk as $item2) {
                                                    $total += $item2['total_masuk'];}
                                                            ?><?php
                                        $total1 = 0;
                                            foreach ($laporankeluar as $item3) {
                                                    $total1 += $item3['total'];}
                                                    ?>
                                        <div class="stat-digit">Rp.<?= $total - $total1; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-stats-up color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Kas Masuk</div>
                                        <div class="stat-digit">Rp.<?= $total; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-stats-down color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Kas Masuk</div>
                                        <div class="stat-digit">Rp.<?= $total1; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link color-pink border-pink"></i></div>
                                    <div class="stat-content dib">
                                        <?php $total_penjualan = 0;
                                        foreach ($penjualan as $hasil) {
                                            $total_penjualan += $hasil['total'];
                                        }?>
                                        <div class="stat-text">Total Penjualan</div>
                                        <div class="stat-digit">Rp.<?= $total_penjualan; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Chart Pendapatan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="ct-bar-chart m-t-30"></div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-4">
                            <div class="card">

                                <div class="card-body">
                                    <div class="ct-pie-chart"></div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                
<?= $this->include('layout/header/footer'); ?>

<script>
    
(function ($) {
    "use strict";

    /*----------------------------------*/
    var KasMasuk = <?= $chartlaporanmasuk?>;
    var KasKeluar = <?= $chartlaporankeluar?>;
    var KasPenjualan = <?= $chartpenjualan?>;
    
    var data = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        series: [
    KasMasuk,
    KasKeluar,
    KasPenjualan,
  ]
    };

    var options = {
        seriesBarDistance: 10
    };

    var responsiveOptions = [
  ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
                labelInterpolationFnc: function (value) {
                    return value[0];
                }
            }
  }]
];

    new Chartist.Bar('.ct-bar-chart', data, options, responsiveOptions);




})(jQuery);









</script>