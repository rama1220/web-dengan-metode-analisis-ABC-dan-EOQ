
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Hasil EOQ Amenities </h4>
                    </div>
                    <div class="row">
                        <section class="content">
                            <a href="pdf"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o " aria-hidden="true"> Export PDF</i></button></a>
                            <br><br>
                            <div id="container">
                                <table class="table table-bordered ">
                                    <thead class="thead-light">
                                        <tr style="text-align: center;">
                                            <th>No</th>
                                            <th>Nama Amenities</th>
                                            <th>Kuantiti Keluar</th>
                                            <th>Harga</th>
                                            <th>Biaya Penanganan</th>
                                            <th>Biaya Penyimpanan</th>
                                            <th>EOQ</th>
                                            <th>Kategori</th>


                                        </tr>
                                    </thead>
                                    <?php
                                    $no = 1;

                                    foreach ($Value as $val) : ?>
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
                                       /*  $total += $b_png;
                                        $t = number_format($total, 2, ',', '.'); */
                                        ?>
                                        <tr style="text-align: center;">

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
                                   <!--  <tr>
                                        <td>
                                            <?php echo $t ?>
                                        </td>
                                    </tr> -->

                                </table>
                            </div>
                        </section>

                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content -->
</div>