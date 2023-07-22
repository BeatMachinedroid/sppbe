
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
    <!-- Isi laporan -->
    <h1 style="text-align: center">PT Karunia Ulul Azmi</h1>
    <table border="1">
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
                                                            <th></th>
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
                                                    