<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Barang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_barang" value="<?= $databarang['id_barang']; ?>">
                        
                        <div class="form-group">
                            <label for="kodebarang">Kode Barang</label>
                            <input type="text" name="kodebarang" class="form-control" id="kodebarang" value="<?= $databarang['kodebarang']; ?>">
                            <small class="form-text text-danger"><?= form_error('kodebarang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="namabarang">Nama Barang</label>
                            <input type="text" name="namabarang" class="form-control" id="namabarang" value="<?= $databarang['namabarang']; ?>">
                            <small class="form-text text-danger"><?= form_error('namabarang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jumlahbarang">Jumlah Barang</label>
                            <input type="text" name="jumlahbarang" class="form-control" id="jumlahbarang" value="<?= $databarang['jumlahbarang']; ?>">
                            <small class="form-text text-danger"><?= form_error('jumlahbarang'); ?></small>
                        </div>
                       
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>