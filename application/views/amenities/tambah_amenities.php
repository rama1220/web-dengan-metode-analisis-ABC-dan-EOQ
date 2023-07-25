<!-- Content -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Data Amenities </h4>
                    </div>
                    <div class="row">
                        <section class="content">
                            <?php echo form_open_multipart('Amenities/tambah_aksi'); ?>

                            <div class="form-group">
                                <label>Nama Amenities</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Upload foto</label>
                                <input type="file" name="foto" class="form-control">
                            </div>


                            <button type="reset" class="btn btn-danger" onclick="window.location.href='<?php echo base_url('Amenities') ?>'"> Batal</a></button>
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