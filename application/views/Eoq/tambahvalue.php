<!-- Content -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Data Value </h4>
                    </div>
                    <div class="row">
                        <section class="content">
                            <?php echo form_open_multipart('Eoq/tambah_aksi'); ?>

                            <div class="form-group">
                                <label>Nilai Penanganan</label>
                                <input type="decimal" name="b_penanganan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nilai Simpan</label>
                                <input type="decimal" name="b_simpan" class="form-control">
                            </div>


                            <button type="reset" class="btn btn-danger" onclick="window.location.href='<?php echo base_url('Eoq') ?>'"> Batal</a></button>
                            <button type="submit" class="btn btn-primary">Simpan </button>
                            <? echo form_close(); ?>
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
</div>