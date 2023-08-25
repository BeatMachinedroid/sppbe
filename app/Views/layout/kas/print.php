
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
       <p class="text-right"></p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                            <th
                                                class="text-center">
                                                No</th>
                                            <th
                                                class="text-center">
                                                Tanggal</th>
                                            <th
                                                class="text-center">
                                                Keterangan</th>
                                            <th
                                                class="text-center">
                                                masuk</th>
                                            <th
                                                class="text-center">
                                                keluar</th>
                                            <th
                                                class="text-center">
                                                Total saldo</th>
                                            </tr>
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
                                
</body>
</html>
                                                    