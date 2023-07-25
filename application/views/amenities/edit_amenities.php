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
                            <?php foreach ($Amenities as $ame) { ?> <?php echo form_open_multipart('Amenities/update'); ?>

                                <input type="hidden" name="id_foto" class="form-control" value="<?php echo $ame->id_foto ?>">
                                <div class="form-group">
                                    <label>Nama Amenities</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $ame->nama ?>">
                                </div>
                                <div class="form-group">
                                    <label>Upload foto</label>
                                    <input type="file" name="foto" class="form-control" value="<?php echo $ame->foto ?>">
                                </div>


                                <button type=" reset" class="btn btn-danger" value="Go Back" onclick="history.back(-1)">Batal</button>
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