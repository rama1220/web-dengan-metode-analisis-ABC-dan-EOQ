<!-- Content -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Edit Data Amenities </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body">
                                <?php echo form_open_multipart('Dataamenities/update'); ?>
                                <table class="table table-bordered ">
                                    <thead class="thead-light">
                                        <tr style="text-align: center;">
                                            <th>No</th>
                                            <th>Nama Amenities </th>
                                            <th>Satuan</th>
                                            <th>Harga Satuan</th>
                                            <th>Kuantitas Pemakaian</th>
                                            <th>Nilai Penyerapan Dana</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $no = 1;
                                    foreach ($Data as $da) : ?>
                                        <tr style="text-align: center;">

                                            <td><?php echo $no++ ?></td>
                                            <input type="hidden" name="id_amenities" class="form-control" value="<?php echo $da->id_amenities ?>">
                                            <td><?php echo $da->nama ?></td>
                                            <td><input type="text" name="satuan" class="form-control" value="<?php echo $da->satuan ?>"></td>
                                            <td><input type="number" name="harga_satuan" class="harga_satuan" value="<?php echo $da->harga_satuan ?>"></td>
                                            <td><input type="number" name="kuan_pemakaian" class="kuan_pemakaian" value="<?php echo $da->kuan_pemakaian ?>"></td>
                                            <td><input type="number" name="n_penyerapandana" class="n_penyerapandana" readonly value="<?php echo $da->n_penyerapandana ?>"></td>

                                        </tr>

                                    <?php endforeach; ?>
                                </table>
                                <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
                                <script>
                                    $('input.harga_satuan, input.kuan_pemakaian').keyup(function() {
                                        var divParent = $(this).closest('tr');
                                        var jumlah = $('input.harga_satuan', divParent).val() - 0;
                                        var harga = $('input.kuan_pemakaian', divParent).val() - 0;
                                        if (jumlah >= 0 && harga >= 0)
                                            $('input.n_penyerapandana', divParent).val(jumlah * harga);
                                    });
                                </script>
                                <div class="button-clas">
                                    <button type="reset" class="btn btn-danger" onclick="window.location.href='<?php echo base_url('Dataamenities') ?>'"> Batal</a></button>
                                    <button type="submit" class="btn btn-primary" name="simpan" value="">Simpan</button>
                                </div>
                                <? echo form_close(); ?>

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