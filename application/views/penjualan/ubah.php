<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Barang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_penjualan" value="<?= $datapenjualan['id_penjualan']; ?>">
                    
                        <div class="form-group">
                            <label for="kodeitem">Kode Barang</label>
                            <input type="text" name="kodeitem" class="form-control" id="kodeitem" value="<?= $datapenjualan['kodeitem']; ?>">
                            <small class="form-text text-danger"><?= form_error('kodeitem'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="namaitem">Nama Barang</label>
                            <input type="text" name="namaitem" class="form-control" id="namaitem" value="<?= $datapenjualan['namaitem']; ?>">
                            <small class="form-text text-danger"><?= form_error('namaitem'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="size">Size</label>
                            <input type="text" name="size" class="form-control" id="size" value="<?= $datapenjualan['size']; ?>">
                            <small class="form-text text-danger"><?= form_error('size'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input type="text" name="jenis" class="form-control" id="jenis" value="<?= $datapenjualan['jenis']; ?>">
                            <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" name="merk" class="form-control" id="merk" value="<?= $datapenjualan['merk']; ?>">
                            <small class="form-text text-danger"><?= form_error('merk'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jumlahbarang">Jumlah Barang</label>
                            <input type="text" name="jumlahbarang" class="form-control" id="jumlahbarang" value="<?= $datapenjualan['jumlahbarang']; ?>">
                            <small class="form-text text-danger"><?= form_error('jumlahbarang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" name="satuan" class="form-control" id="satuan" value="<?= $datapenjualan['satuan']; ?>">
                            <small class="form-text text-danger"><?= form_error('satuan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="totalpendapatan">Total Pendapatan</label>
                            <input type="text" name="totalpendapatan" class="form-control" id="totalpendapatan" value="<?= $datapenjualan['totalpendapatan']; ?>">
                            <small class="form-text text-danger"><?= form_error('totalpendapatan'); ?></small>
                        </div>
                       
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>