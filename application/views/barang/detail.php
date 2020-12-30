<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail DataBarang
                </div>
                <div class="card-body">
                <table class="table table-hover">
                        <tbody>
                        <tr>
                                <th scope="row">Id Barang</th>
                                <td>:</td>
                                <td><?= $databarang['id_barang'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Kode Barang</th>
                                <td>:</td>
                                <td><?= $databarang['kodebarang'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Barang</th>
                                <td>:</td>
                                <td><?= $databarang['namabarang'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jumlah Barang</th>
                                <td>:</td>
                                <td><?= $databarang['jumlahbarang'] ?></td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>databarang" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>