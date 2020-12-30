<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Penjualan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_penjualan">Id Penjualan</label>
                            <input type="text" name="id_penjualan" class="form-control" id="id_penjualan">
                            <small class="form-text text-danger"><?= form_error('id_penjualan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kodeitem">Kode Barang</label>
                            <input type="text" name="kodeitem" class="form-control" id="kodeitem">
                            <small class="form-text text-danger"><?= form_error('kodeitem'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="namaitem">Nama Barang</label>
                            <input type="text" name="namaitem" class="form-control" id="namaitem">
                            <small class="form-text text-danger"><?= form_error('namaitem'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="size">Size</label>
                            <input type="text" name="size" class="form-control" id="size">
                            <small class="form-text text-danger"><?= form_error('size'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input type="text" name="jenis" class="form-control" id="jenis">
                            <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" name="merk" class="form-control" id="merk">
                            <small class="form-text text-danger"><?= form_error('merk'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jumlahbarang">Jumlah Barang</label>
                            <input type="text" name="jumlahbarang" class="form-control" id="jumlahbarang">
                            <small class="form-text text-danger"><?= form_error('jumlahbarang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" name="satuan" class="form-control" id="satuan">
                            <small class="form-text text-danger"><?= form_error('satuan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="totalpendapatan">Total Pendapatan</label>
                            <input type="text" name="totalpendapatan" class="form-control" id="totalpendapatan">
                            <small class="form-text text-danger"><?= form_error('totalpendapatan'); ?></small>
                        </div>
                   
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>