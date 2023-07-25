<html lang="en"><head>
</head><body>


    <h2 style="text-align: center;">Data Amenities Vinn Villa Jepara</h2>
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
            <th>Satuan</th>
            <th>Harga Satuan</th>
            <th>Kuantitas Pemakaian</th>
            <th>Nilai Penyerapan Dana</th>
            <th>Persentase Penyerapan Dana</th>
        </tr>

        <?php

        $no = 1;
        $sub = 0;
        foreach ($Data as $da) : ?>
            <tr style="text-align: center;">

                <?php
                $rp1 = number_format($da->harga_satuan, 2, ',', '.');
                $rp2 = number_format($da->n_penyerapandana, 2, ',', '.');
                $rp3 = ($da->n_penyerapandana / $Sum->jumlah * 100);
                $sub += $rp3;
                ?>
                <td><?php echo $no++ ?></td>
                <td><?php echo $da->nama ?></td>
                <td><?php echo $da->satuan ?></td>
                <td>Rp<?php echo $rp1 ?></td>
                <td><?php echo $da->kuan_pemakaian ?></td>
                <td>Rp<?php echo $rp2 ?></td>
                <td><?php echo round($rp3, 1) ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <?php $Total = number_format($Sum->jumlah, 2, ',', '.') ?>
            <td></td>
            <td colspan="4" style="text-align: center;"> <b>Total</b></td>
            <td style="text-align: center;"><b>Rp.<?php echo $Total ?></b></td>
            <td style="text-align: center;"><b><?php echo $sub ?></b></td>
        </tr>
    </table>

</body></html>