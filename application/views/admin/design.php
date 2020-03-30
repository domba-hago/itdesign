<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Daftar Desain</h4>
                    <?php echo $this->session->userdata('status'); ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <td>Desain ID</td>
                                <td>Nama Desain</td>
                                <td>Pembuat</td>
                                <td>Tanggal</td>
                                <td>Harga</td>
                                <td>Kategori</td>
                                <td>Status</td>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($design as $row)
                                    {
                                        $kategori   = "";
                                        $status     = "";

                                        if ($row->status == 1)
                                            $status = "<span class='label label-success'>Tersedia</span>";
                                        else
                                            $status = "<span class='label label-danger'>Dipesan</span>";

                                        switch ($row->id_kategori) {
                                            case 1:
                                                $kategori = "label label-default";
                                                break;
                                            case 2:
                                                $kategori = "label label-primary";
                                                break;
                                            case 3:
                                                $kategori = "label label-success";
                                                break;
                                            case 4:
                                                $kategori = "label label-info";
                                                break;
                                            case 5:
                                                $kategori = "label label-warning";
                                                break;
                                            case 6:
                                                $kategori = "label label-danger";
                                                break;
                                        }

                                        printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td><span class='%s'>%s</span></td><td>%s</td></tr>", $row->id_design, $row->nama, $row->pembuat, $row->tanggal, $this->itdesign->formatNumber($row->harga), $kategori, $row->kategori, $status);
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="<?php echo base_url('admin/design_tambah'); ?>" class="btn btn-primary" title="Tambah Desain">Tambah Desain</a>
                </div>
            </div>
        </div>
    </div>
