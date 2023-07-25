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
                                <div class="traffic-chart">
                                    <div class="card" style="width: 25rem;">
                                        <div class="card-body">
                                            <?php echo form_open('Inputdata/formtabel') ?>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> Input Jumlah Data Baris</label>
                                                <br>
                                                <input type="number" name='jumlah' autocomplete="off">
                                                <button type="submit" class="btn btn-primary">Buat</button>
                                            </div>

                                            <?php echo form_close() ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
</div>