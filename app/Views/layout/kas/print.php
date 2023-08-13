
<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
    <style>
        /* Gaya cetak khusus */
        @media print {
            /* Atur tampilan yang diinginkan untuk cetak */
            /* Misalnya, menghilangkan elemen yang tidak diperlukan seperti navigasi, footer, dll. */
        }
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    text-size : 12px;
}

.container {
    margin: 50px auto;
    max-width: 800px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
    text-size : 12px;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

.text-center {
    text-align: center;
}

.text-left {
    text-align: left;
}

.text-right {
    text-align: right;
}

.text-black {
    color: black;
}

.font-weight-bold {
    /* font-weight: bold; */
}

.bg-primary {
    background-color: #007bff;
    color: #fff;
}

    </style>
</head>
<body>
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
                                            </body>
</html>
                                                    