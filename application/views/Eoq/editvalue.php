<!-- Content -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Value Penanganan & Simpan</h4>
                    </div>
                    <div class="row">
                        <section class="content">
                            <?php foreach ($Value as $val) { ?> <?php echo form_open_multipart('Eoq/update'); ?>

                                <input type="hidden" name="id_value" class="form-control" value="<?php echo $val->id_value ?>">
                                <div class="form-group">
                                    <label>Nilai Penaganan</label>
                                    <input type="decimal" name="b_penanganan" class="form-control" value="<?php echo $val->b_penanganan ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nilai Simpan</label>
                                    <input type="decimal" name="b_simpan" class="form-control" value="<?php echo $val->b_simpan ?>">
                                </div>


                                <button type="reset" class="btn btn-danger" onclick="window.location.href='<?php echo base_url('Eoq') ?>'"> Batal</a></button>
                                <button type="submit" class="btn btn-primary">Simpan </button>
                                <? echo form_close(); ?> <?php } ?>
                        </section>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="traffic-chart">
                                    <div class="content-wrapper">


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