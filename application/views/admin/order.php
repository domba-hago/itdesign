<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Permintaan Order</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <td>Oleh</td>
                                <td>Nama Desain</td>
                                <td>Harga Desain</td>
                                <td>Transfer</td>
                                <td>Pembelian</td>
                                <td>Aksi</td>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($data as $row)
                                    {
                                        $bayar = '';
                                        $status = '';
                                        $aksi = '';

                                        if ($row->bayar == 1)
                                            $bayar = '<span class="label label-success">Sudah</span>';
                                        else
                                            $bayar = '<span class="label label-danger">Belum</span>';

                                        if ($row->konfirmasi == 1)
                                        {
                                            $status = '<span class="label label-success">Sudah Dikonfirmasi</span>';
                                            $aksi = "Tidak ada aksi";
                                        }
                                        else
                                        {
                                            $status = '<span class="label label-danger">Belum Dikonfirmasi</span>';
                                            $aksi = "<a href='" . base_url('core/design_konfirmasi') . "/" . $row->id . "' title='Konfirmasi' class='btn btn-xs btn-success'>Konfirmasi</a>";
                                        }

                                        printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row->pembeli, $row->nama, $this->itdesign->formatNumber($row->harga), $bayar, $status, $aksi);
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
