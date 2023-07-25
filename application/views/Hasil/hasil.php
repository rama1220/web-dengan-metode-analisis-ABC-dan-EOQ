<!-- Content -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Hasil Pengendalian Amenities </h4>
                    </div>
                    <div class="row">
                        <section class="content">
                            <div class="date-time">
                                <p>Tanggal: <span id="tanggal"></span></p>
                                <p>Waktu: <span id="waktu"></span></p>
                                <script>
                                    var dt = new Date();
                                    document.getElementById("tanggal").innerHTML = (("0" + dt.getDate()).slice(-2)) + "/" + (("0" + (dt.getMonth() + 1)).slice(-2)) + "/" + (dt.getFullYear());
                                    document.getElementById("waktu").innerHTML = (("0" + dt.getHours()).slice(-2)) + ":" + (("0" + dt.getMinutes()).slice(-2));
                                </script>

                            </div>

                            <?php echo $this->session->flashdata('pesan'); ?>

                            <div id="container">

                                <?php echo form_open_multipart('hasil/tambah'); ?>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></button>

                                <br><br>
                                <table class="table table-bordered" style="width:">
                                    <thead class="thead-light">
                                        <tr style="text-align: center;">
                                            <th>No</th>
                                            <th>Nama Amenities</th>
                                            <th>Nilai Penyerapan Dana</th>
                                            <th>Persentase Penyerapan Dana(%)</th>
                                            <th>Persentase Kumulatif(%)</th>
                                            <th>Persentase Jenis Item Amenities(%)</th>
                                            <th>Kategori</th>

                                        </tr>
                                    </thead>

                                    <?php
                                    $no = 1;
                                    $subtotal = 0;
                                    $total = 0;
                                    $t1 = 0;
                                    foreach ($Data as $da) : ?>
                                        <tr style="text-align: center; background-color:beige;">

                                            <?php

                                            $rp2 = number_format($da->n_penyerapandana, 2, ',', '.');
                                            $rp3 = ($da->n_penyerapandana / $Sum->jumlah * 100);
                                            $subtotal += $rp3;
                                            $p_item = 1 / $Count * 100;
                                            $total += $da->n_penyerapandana;
                                            $t1 = number_format($total, 2, ',', '.');

                                            $nilai = $subtotal;
                                            if ($nilai <= 70) {
                                                $kategori = "A";
                                            } elseif (($nilai > 70) and ($nilai <= 89)) {
                                                $kategori = "B";
                                            } elseif ($nilai >= 90) {
                                                $kategori = "C";
                                            }
                                            ?>

                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $da->nama ?><input type="hidden" name="id_foto[]" value="<?php echo $da->id_foto ?>" readonly></td>
                                            <td>Rp<?php echo $rp2 ?><input type="hidden" name="n_penyerapandana[]" value="<?php echo $da->n_penyerapandana ?>" readonly></td>
                                            <td style="background-color:Burlywood;"><input style="text-align: center; width:70%" type="number" name="pers_penyerapandana[]" value="<?php echo round($rp3, 1) ?>" readonly></td>
                                            <td style="background-color:mistyrose;"><input style="text-align: center; width:70%" type="float" name="pers_kumulatif[]" value="<?php echo round($subtotal, 1) ?>" readonly></td>
                                            <td><input style="text-align: center; width:70%" type="float" name="pers_item[]" value="<?php echo round($p_item, 1) ?>" readonly></td>
                                            <td><input style="text-align: center; width:60%" type="text" name="kategori[]" value="<?php echo $kategori ?>" readonly></td>

                                        </tr>

                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="2" style="text-align: center; background-color: Beige; "> <b>Total</b></td>
                                        <td style="text-align: center; background-color: Beige;"><b>Rp.<?php echo $t1 ?></b></td>
                                        <td colspan="4" style="background-color: Beige; "></td>
                                    </tr>

                                </table>
                                <? echo form_close(); ?>

                            </div>
                            <br><br><br>
                            <h4 class="box-title">Hasil Pengelompokkan Amenities Berdasarkan Nilai Penyerapan Dana </h4>

                            <?php echo form_open_multipart('hasil/hapus'); ?>
                            <?php echo anchor('hasil/hapus/', '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                            <br> <br>
                            <div class="tab-class">
                                <table class="table table-bordered " style="width:60%">
                                    <thead class="thead-light">
                                        <tr style="text-align: center;">
                                            <th>Kategori</th>
                                            <th>Jumlah Amenities</th>
                                            <th>Nilai Penyerapan Dana</th>
                                            <th>Persentase (%)</th>
                                        </tr>
                                    </thead>


                                    <?php
                                    $total = 0;
                                    $rpA = number_format($A->n_penyerapandana, 2, ',', '.');
                                    $rpB = number_format($B->n_penyerapandana, 2, ',', '.');
                                    $rpC = number_format($C->n_penyerapandana, 2, ',', '.');
                                    $totalKate = $A->kategori + $B->kategori + $C->kategori;
                                    $subtotInv = $A->n_penyerapandana + $B->n_penyerapandana + $C->n_penyerapandana;
                                    $totInv = number_format($subtotInv, 2, ',', '.');
                                    ?>
                                    <?php foreach ($Data as $da) : ?>
                                        <?php
                                        $total += $da->n_penyerapandana;
                                        $persA =  $A->n_penyerapandana / $total * 100;
                                        $persB =  $B->n_penyerapandana / $total * 100;
                                        $persC =  $C->n_penyerapandana / $total * 100;
                                        $totPers = $persA + $persB + $persC;
                                        ?>
                                    <?php endforeach; ?>

                                    <tr style="text-align: center; background-color:beige;">
                                        <td><?php echo 'A' ?></td>
                                        <td><?php echo $A->kategori ?></td>
                                        <td>Rp<?php echo $rpA ?></td>
                                        <td><?php echo round($persA, 1) ?></td>
                                    </tr>
                                    <tr style="text-align: center; background-color:beige;">
                                        <td><?php echo 'B' ?></td>
                                        <td><?php echo $B->kategori ?></td>
                                        <td>Rp<?php echo $rpB ?></td>
                                        <td><?php echo round($persB, 1) ?></td>
                                    </tr>
                                    <tr style="text-align: center; background-color:beige;">
                                        <td><?php echo 'C' ?></td>
                                        <td><?php echo $C->kategori ?></td>
                                        <td>Rp<?php echo $rpC ?></td>
                                        <td><?php echo round($persC, 1) ?></td>
                                    </tr>
                                    <tr style="text-align: center; background-color:Burlywood;">
                                        <td><b>Total</b></td>
                                        <td><b><?php echo $totalKate ?></b></td>
                                        <td><b>Rp<?php echo $totInv ?></b></td>
                                        <td><b><?php echo $totPers ?></b></td>
                                    </tr>
                                </table>
                            </div>
                            <? echo form_close(); ?>

                        </section>
                        <div class=" tab-class">
                        </div>

                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="card" style="width: 110%;">
                                    <div class="card-body">
                                        <h3 class="card-title"><b>Penjelasan</b></h3>
                                        <h4 style="text-align:justify; line-height:1.5; font-family:'Times New Roman', Times, serif"><span><b>Presentase Penyerapan Dana</b> adalah hasil dari Nilai Penyerapan dana yang dibagi dengan total Nilai Penyerapan Dana yang dimana hasilnya menjadi Presentase Penyerapan Dana yang nilainya diurutkan dari nilai terbesar hingga terkecil.</span><br>
                                            <span><b>Presentase Kumulatif</b> adalah nilai penentu dalam pengkategorian jenis Amenities yang akan dikendalikan ketersediaannya, nilai dari Persentase Kumulatif didapat dari penjumlahan turunan dari Persentase Penyerapan Dana yang telah di urutkan nilainya.</span><br>
                                            <span><b>Persentase Item Jenis Amenities</b> didapat dari pembagian 1/Jumlah Item Jenis Amenities*100.</span><br>
                                            <span><b>Kategori</b> dibagi menjadi 3 bagian yaitu A, B, dan C :</span><br>
                                            <b>Kategori A</b> merupakan barang dengan pesanan atau pergerakan cepat habis dengan nilai Persentase Penyerapan Dana yang tinggi dan perlu diperhatikan pengendaliannya secara intensif, Persentase Kumulatifnya direntan 0-70%.<br>
                                            <b>Kategori B</b> merupakan barang dengan pesanan atau pergerakan sedang dengan nilai Persentase Penyerapan Dana dibawah Kategori A dengan pengendalian barang tidak terlalu intensif, Persentase Kumulatifnya direntan 70-90%.<br>
                                            <b>Kategori C</b> merupakan barang dengan pesanan atau pergerakan rendah dengan nilai Persentase Penyerapan Dana dibawah Kategori B dengan pengendalian barang tidak intensif, Persentase Kumulatifnya direntan 90-100%.<br>
                                        </h4>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
</div>