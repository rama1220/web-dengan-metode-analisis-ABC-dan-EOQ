<html lang="en"><head>
</head><body>


    <h2 style="text-align: center;">Perencanaan Amenities Vinn Villa Jepara</h2>
    <div class="date-time">

        Tanggal: <?php echo date('d F Y'); ?> <br>
        Waktu :
        <?php date_default_timezone_set('Asia/Jakarta');
        echo date('H:i ');  ?>
    </div>
    <br> <br>

    <table border="1" cellpadding="15" width="100%">

        <tr>
            <th>No</th>
            <th>Nama Amenities</th>
            <th>Kuantiti Keluar</th>
            <th>Harga</th>
            <th>Biaya Penanganan</th>
            <th>Biaya Penyimpanan</th>
            <th>EOQ</th>
            <th>Kategori</th>

        </tr>

        <?php

        $no = 1;
        $sub = 0;
        foreach ($Value as $val) : ?>
            <tr style="text-align: center;">

                <?php
                $k = $val->kuan_pemakaian;
                $rp = $val->harga_satuan;
                $rp1 = number_format($rp, 2, ',', '.');
                $a = $val->n_penyerapandana;
                $b = $val->b_penanganan;
                $b_png = $a * $b / 100;
                $png = number_format($b_png, 2, ',', '.');
                $c = $val->b_simpan;
                $b_smp = $rp * $c / 100;
                $smp = number_format($b_smp, 2, ',', '.');
                $eoq = sqrt(2 * $k * $b_png / ($rp * $c / 100));
                ?>
                <td><?php echo $no++ ?></td>
                <td><?php echo $val->nama ?></td>
                <td><?php echo $val->kuan_pemakaian ?></td>
                <td><?php echo $rp1 ?></td>
                <td><?php echo $png ?></td>
                <td><?php echo $smp ?></td>
                <td><?php echo round($eoq, 0) ?></td>
                <td><?php echo $val->kategori ?></td>
            </tr>
        <?php endforeach; ?>


    </table>

</body></html>