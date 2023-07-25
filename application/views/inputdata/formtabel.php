<!-- Content -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Input Data Amenities </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card-body">
                                <form action="tambah" method="post">
                                    <table class="table table-bordered ">
                                        <thead class="thead-light">
                                            <tr style="text-align: center;">
                                                <th>No</th>
                                                <th style="padding-right: 55px; padding-left: 55px;">Nama Amenities </th>
                                                <th>Nilai Simpan %</th>
                                                <th>Satuan</th>
                                                <th>Harga Satuan</th>
                                                <th>Kuantitas Item</th>
                                                <th>Nilai Penyerapan Dana</th>

                                            </tr>
                                        </thead>

                                        <?php
                                        $no = 1;
                                        $jumlah = $_POST['jumlah'];
                                        for ($i = 0; $i < $jumlah; $i++) {
                                        ?>
                                            <tbody>
                                                <?php for ($i = 0; $i < $jumlah; $i++) : ?>
                                                    <tr>
                                                        <th><?php echo $no++ ?></th>
                                                        <td>
                                                            <select name="id_foto[]" class="form-control">
                                                                <option>Pilih Amenities</option>
                                                                <?php foreach ($nama as $nm) : ?>
                                                                    <option value="<?php echo $nm['id_foto']; ?>"><?php echo $nm['nama']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td> <input type="hidden" name="id_value[]" value="<?php echo $val->id_value; ?>" autocomplete="off"><?php echo $val->b_simpan; ?></td>
                                                        <td> <input type="text" name="satuan[]" autocomplete="off"></td>
                                                        <td> <input type="number" name="harga_satuan[]" class="harga_satuan" autocomplete="off"></td>
                                                        <td> <input type="number" name="kuan_pemakaian[]" class="kuan_pemakaian" autocomplete="off"></td>
                                                        <td> <input type="number" class="n_penyerapandana" name="n_penyerapandana[]" autocomplete="off" readonly></td>

                                                    </tr>
                                                <?php endfor; ?>
                                            </tbody>


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



                                        <?php } ?>
                                    </table>
                                    <div class="button-clas">
                                        <button type="reset" class="btn btn-danger" onclick="window.location.href='<?php echo base_url('Inputdata') ?>'"> Batal</a></button>
                                        <button type="submit" class="btn btn-primary" name="simpan" value="">Simpan</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </div>
</div>