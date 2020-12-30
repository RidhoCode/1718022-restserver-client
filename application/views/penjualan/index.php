<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>


    <div class="row ">
        <div class="col">
            <h3>Data Penjualan</h3>
            <a href="<?= base_url(); ?>datapenjualan/tambah" class="btn btn-primary">Tambah Data Penjualan</a>
            <div class="table-responsive" >
            <table id="table_data" class="table table-bordered table-striped table-admin">
            <thead><tr><th>No</th><th>Kode Barang</th><th>Nama Barang</th><th>Size</th><th>Jenis</th><th>Merk</th><th>Jumlah Barang</th><th>Satuan</th><th>Total Pendapatan</th><th>Aksi</th></tr></thead>
            <tbody>
            <?php foreach ($datapenjualan as $o): ?>    
            <tr>
            <td><?=$o['id_penjualan'] ?></td>
            <td><?=$o['kodeitem'] ?></td>
            <td><?=$o['namaitem'] ?></td>
            <td><?=$o['size'] ?></td>
            <td><?=$o['jenis'] ?></td>
            <td><?=$o['merk'] ?></td>
            <td><?=$o['jumlahbarang'] ?></td>
            <td><?=$o['satuan'] ?></td>
            <td><?=$o['totalpendapatan'] ?></td>
            <td>
            <a href="<?= base_url(); ?>datapenjualan/detail/<?= $o['id_penjualan']; ?>" class="badge badge-primary float-left">detail</a>
            <a href="<?= base_url(); ?>datapenjualan/ubah/<?=$o['id_penjualan']; ?>"class="badge badge-success float-left">ubah</a>
            <a href="<?= base_url(); ?>datapenjualan/hapus/<?= $o['id_penjualan']; ?>" class="badge badge-danger float-left tombol-hapus">hapus</a>
           
  
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
</div>
          </div>
          </div>
          </div>


  