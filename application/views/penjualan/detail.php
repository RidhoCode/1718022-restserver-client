<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Penjualan
                </div>
                <div class="card-body">
                <table class="table table-hover">
                        <tbody>
                        <tr>
                                <th scope="row">Id Barang</th>
                                <td>:</td>
                                <td><?= $datapenjualan['id_penjualan'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Kode Barang</th>
                                <td>:</td>
                                <td><?= $datapenjualan['kodeitem'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Barang</th>
                                <td>:</td>
                                <td><?= $datapenjualan['namaitem'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jumlah Barang</th>
                                <td>:</td>
                                <td><?= $datapenjualan['size'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Id Barang</th>
                                <td>:</td>
                                <td><?= $datapenjualan['jenis'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Kode Barang</th>
                                <td>:</td>
                                <td><?= $datapenjualan['merk'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Barang</th>
                                <td>:</td>
                                <td><?= $datapenjualan['jumlahbarang'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jumlah Barang</th>
                                <td>:</td>
                                <td><?= $datapenjualan['satuan'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jumlah Barang</th>
                                <td>:</td>
                                <td><?= $datapenjualan['totalpendapatan'] ?></td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>datapenjualan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>