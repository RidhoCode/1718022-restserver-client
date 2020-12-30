<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

      <div class="row ">
        <div class="col">
            <h3>Data Barang</h3>
            <a href="<?= base_url(); ?>databarang/tambah" class="btn btn-primary">Tambah Data Barang</a>
            <div class="table-responsive" >
            <table id="table_data" class="table table-bordered table-striped table-admin">
            <thead><tr><th>No</th><th>Kode Barang</th> <th>Nama Barang</th><th>Jumlah Barang</th><th>Aksi</th></tr></thead>
            <tbody>
            <?php foreach ($databarang as $o): ?>    
            <tr>
            <td><?=$o['id_barang'] ?></td>
            <td><?=$o['kodebarang'] ?></td>
            <td><?=$o['namabarang'] ?></td>
            <td><?=$o['jumlahbarang'] ?></td>
            <td>
            <a href="<?= base_url(); ?>databarang/detail/<?= $o['id_barang']; ?>" class="badge badge-primary float-left">detail</a> 
            <a href="<?= base_url(); ?>databarang/ubah/<?=$o['id_barang']; ?>" class="badge badge-success float-left">ubah</a> 
            <a href="<?= base_url(); ?>databarang/hapus/<?= $o['id_barang']; ?>" class="badge badge-danger float-left tombol-hapus">hapus</a>  
            </td>
            </tr>
            <?php endforeach ?>
            </tbody>
            </table>

          </div>
          </div>
          </div>
          </div>
</div>