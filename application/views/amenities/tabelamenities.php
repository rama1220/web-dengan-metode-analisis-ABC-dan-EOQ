<!-- Content -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Data Jenis Amenities </h4>
                    </div>
                    <div class="row">
                        <section class="content">
                            <?php echo $this->session->flashdata('pesan'); ?> <a href="<?= site_url('Amenities/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a>
                            <div class="form" style="text-align:right">
                                <?php echo form_open('Amenities/cari') ?>
                                <input type="text" name="keyword" autocomplete="off" id="keyword" placeholder="Cari Nama Amenities..">
                                <input type="submit" value="Cari">
                                <?php echo form_close() ?>
                            </div>
                            <br>
                            <div id="container">
                                <table class="table table-bordered ">
                                    <thead class="thead-light">
                                        <tr style="text-align: center;">
                                            <th>No</th>
                                            <th>Nama Amenities</th>
                                            <th>Foto</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $no = 1;
                                    foreach ($Amenities as $ame) : ?>
                                        <tr style="text-align: center;">

                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $ame->nama ?></td>
                                            <td><img src="<?php echo base_url() ?>assets/images/<?php echo $ame->foto ?>" width="100"></td>
                                            <td><?php echo anchor('Amenities/edit/' . $ame->id_foto, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                            <td onclick="javascript: return confirm('Anda yakin ingin menghapus data ini?')"><?php echo anchor('Amenities/hapus/' . $ame->id_foto, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

                                        </tr>
                                    <?php endforeach; ?>
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