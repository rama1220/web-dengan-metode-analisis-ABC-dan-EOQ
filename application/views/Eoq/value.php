<!-- Content -->
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Value Penanganan & Simpan </h4>
                    </div>
                    <div class="row">
                        <section class="content">
                            <?php echo $this->session->flashdata('pesan'); ?> <a href="<?= site_url('Eoq/tambah') ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <br><br>
                            <div id="container">
                                <table class="table table-bordered ">
                                    <thead class="thead-light">
                                        <tr style="text-align: center;">
                                            <th>No</th>
                                            <th>Nilai Penanganan %</th>
                                            <th>Nilai Simpan %</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $no = 1;
                                    foreach ($Value as $val) : ?>
                                        <tr style="text-align: center;">

                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $val->b_penanganan ?></td>
                                            <td><?php echo $val->b_simpan ?></td>
                                            <td><?php echo anchor('Eoq/edit/' . $val->id_value, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                            <td onclick="javascript: return confirm('Anda yakin ingin menghapus data ini?')"><?php echo anchor('Eoq/hapus/' . $val->id_value, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

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