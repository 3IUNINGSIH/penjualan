<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">kode barang</th>
      <th scope="col">nama barang</th>
      <th scope="col">harga</th>
      <th scope="col">stok</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($barang as $brg): ?>
      <td><?= $brg['id_barang'];?></td>
      <td><?= $brg['nama_barang'];?></td>
      <td><?= $brg['harga'];?></td>
      <td><?= $brg['stok'];?></td> 
    </tr>
    <?php endforeach ?>
 

</tbody>
</table>
</div>