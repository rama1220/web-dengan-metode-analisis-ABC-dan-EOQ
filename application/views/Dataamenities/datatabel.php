<!-- Content -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Data Tabel Amenities </h4>
                    </div>
                    <div class="row">
                        <section class="content">
                            <?php echo $this->session->flashdata('pesan'); ?>
                            <div class="form" style="text-align:right">
                                <?php echo form_open('Dataamenities/cari') ?>
                                <input type="text" name="keyword" autocomplete="off" id="keyword" placeholder="Cari Nama Amenities..">
                                <input type="submit" value="Cari">
                                <?php echo form_close() ?>
                            </div>
                            <div class="date-time">
                                <p>Tanggal: <span id="tanggal"></span></p>
                                <p>Waktu: <span id="waktu"></span></p>
                                <script>
                                    var dt = new Date();
                                    document.getElementById("tanggal").innerHTML = (("0" + dt.getDate()).slice(-2)) + "/" + (("0" + (dt.getMonth() + 1)).slice(-2)) + "/" + (dt.getFullYear());
                                    document.getElementById("waktu").innerHTML = (("0" + dt.getHours()).slice(-2)) + ":" + (("0" + dt.getMinutes()).slice(-2));
                                </script>

                            </div>
                            <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
                                    $("#checkAll").click(function() { // Ketika user men-cek checkbox all
                                        if ($(this).is(":checked")) // Jika checkbox all diceklis
                                            $(".checkData").prop("checked", true); // ceklis semua checkbox amenities dengan class "checkData"
                                        else // Jika checkbox all tidak diceklis
                                            $(".checkData").prop("checked", false); // un-ceklis semua checkbox amenities dengan class "checkData"
                                    });

                                    $("#delete").click(function() { // Ketika user mengklik tombol delete
                                        var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi

                                        if (confirm) // Jika user mengklik tombol "Ok"
                                            $("#form-delete").submit(); // Submit form
                                    });
                                });
                            </script>

                            <a href="Dataamenities/pdf"><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o " aria-hidden="true"> Export PDF</i></button></a>
                            <br><br>
                            <div id="container">
                                <form method="POST" action="Dataamenities/hapusSemua" id="form-delete">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr style="text-align: center;">
                                                <th>No</th>
                                                <th>Nama Amenities</th>
                                                <th>Nilai Simpan %</th>
                                                <th>Satuan</th>
                                                <th>Harga Satuan</th>
                                                <th>Kuantitas Item</th>
                                                <th>Nilai Penyerapan Dana</th>
                                                <th>Persentase Penyerapan Dana</th>
                                                <th>Edit</th>
                                                <th>Hapus</th>
                                                <th><button type="button" class="btn btn-secondary" name="delete" id="delete">Hapus Semua</button><br><br><input type="checkbox" id="checkAll"></th>
                                            </tr>
                                        </thead>
                                        <?php

                                        $no = 1;
                                        $sub = 0;
                                        $total = 0;
                                        $t1 = 0;

                                        foreach ($Data as $da) : ?>
                                            <tr style="text-align: center;">

                                                <?php
                                                $rp1 = number_format($da->harga_satuan, 2, ',', '.');
                                                $rp2 = number_format($da->n_penyerapandana, 2, ',', '.');
                                                $rp3 = ($da->n_penyerapandana / $Sum->jumlah * 100);
                                                $sub += $rp3;
                                                $total += $da->n_penyerapandana;
                                                $t1 = number_format($total, 2, ',', '.');
                                                ?>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $da->nama ?></td>
                                                <td> <?php echo $da->b_simpan ?></td>
                                                <td><?php echo $da->satuan ?></td>
                                                <td>Rp<?php echo $rp1 ?></td>
                                                <td><?php echo $da->kuan_pemakaian ?></td>
                                                <td>Rp<?php echo $rp2 ?></td>
                                                <td><?php echo round($rp3, 1) ?></td>

                                                <td><?php echo anchor('Dataamenities/edit/' . $da->id_amenities, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                                <td onclick="javascript: return confirm('Anda yakin ingin menghapus data ini?')"><?php echo anchor('Dataamenities/hapus/' . $da->id_amenities, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                <td><input type="checkbox" class="checkData" name="id_amenities[]" value="<?php echo $da->id_amenities ?>"></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td style="background-color: Beige;"></td>
                                            <td colspan="4" style="text-align: center; background-color: Beige; "> <b>Total</b></td>
                                            <td style="text-align: center; background-color: Burlywood;"><b>Rp.<?php echo $t1 ?></b></td>
                                            <td style="text-align: center; background-color: Burlywood;"><b><?php echo round($sub) ?></b></td>
                                            <td colspan="4" style="background-color: Beige;"></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </section>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="traffic-chart">
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