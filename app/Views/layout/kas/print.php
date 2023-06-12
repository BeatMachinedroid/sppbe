<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
    <style>
        /* CSS khusus untuk tampilan PDF */
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Laporan</h1>

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
                                                                <?= date('d  M  Y',strtotime( $tanggal)) ?></th>
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
</body>
</html>