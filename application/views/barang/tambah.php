<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Barang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_barang">Id Barang</label>
                            <input type="text" name="id_barang" class="form-control" id="id_barang">
                            <small class="form-text text-danger"><?= form_error('id_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kodebarang">Kode Barang</label>
                            <input type="text" name="kodebarang" class="form-control" id="kodebarang">
                            <small class="form-text text-danger"><?= form_error('kodebarang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="namabarang">Nama Barang</label>
                            <input type="text" name="namabarang" class="form-control" id="namabarang">
                            <small class="form-text text-danger"><?= form_error('namabarang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jumlahbarang">Jumlah Barang</label>
                            <input type="text" name="jumlahbarang" class="form-control" id="jumlahbarang">
                            <small class="form-text text-danger"><?= form_error('jumlahbarang'); ?></small>
                        </div>
                   
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>