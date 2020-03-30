<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Tambah Desain</h4>
                    <!-- <div class="col-md-6 col-md-offset 3"> -->
                        <form action="<?php echo base_url('core/design_tambah'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Desain</label>
                                <input type="text" name="nama" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori" class="form-control" required="required">
                                    <?php
                                        foreach ($kategori as $row)
                                            printf("<option value='%d'>%s</option>", $row->id, $row->kategori);
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pembuat</label>
                                <input type="text" name="pembuat" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mobile" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Tampilan</label>
                                <input type="file" name="picture">
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Tambah Desain" class="btn btn-primary">
                                <a href="<?php echo base_url('admin/design'); ?>" class="btn btn-default pull-right" title="Kembali"><i class="fa fa-arrow-left"></i> Kembali</a>
                            </div>
                        </form>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
