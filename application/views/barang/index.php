<div class="container">
  <?php if ($this->session->flashdata('flash')): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>data barang</strong> <?= $this->session->flashdata('flash'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

 <?php if (empty($barang)):?>
<div class="alert alert-danger" role="alert">
  ups! datanya ga ada genks!
 </div>
  <?php endif; ?>
  
  <div class="row-mt-3">
    <div class="colmd-6">
      <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">tambah data barang</a>
    </div>
  </div>

    <div class="row mt-3">
      <div class="col-md-6">
      <form action="" method="post">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="cari data barang apa?" name='keyword'>
      <button class="btn btn-primary" type="submit">cari sekarang</button>
    </div>
      </form>


  </div>
  </div>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">kode barang</th>
      <th scope="col">nama barang</th>
      <th scope="col">harga</th>
      <th scope="col">stok</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($barang as $brg): ?>
      <td><?= $brg['id_barang'];?></td>
      <td><?= $brg['nama_barang'];?></td>
      <td><?= $brg['harga'];?></td>
      <td><?= $brg['stok'];?></td> 

      <td><a href="<?= base_url(); ?>barang/detail/<?=$brg['id_barang']; ?>" class="btn btn-primary" >detail</a>
       <a href="<?= base_url(); ?>barang/ubah/<?= $brg['id_barang']; ?>" class="btn btn-success">ubah</a>
       <a href="<?= base_url(); ?>barang/hapus/<?= $brg['id_barang']; ?>" class="btn btn-danger" onclick="return confirm ('apakah yakin akan dihapus?')">hapus</a>



    </tr>
    <?php endforeach ?>
 

</tbody>
</table>
</div>