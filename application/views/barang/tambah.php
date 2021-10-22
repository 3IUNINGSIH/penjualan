<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <?php if (validation_errors() ):?>
            <div class="alert alert-primary" role="alert">
               <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="id_barang" class="form-label">kode barang</label>
                    <input type="text" class="form-control" name="id_barang" id="id_barang">
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">nama barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">harga</label>
                    <input type="text" class="form-control" name="harga" id="harga">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">stok</label>
                    <input type="text" class="form-control" name="stok" id="stok">
                </div>
                <button name="tambah" type="submit" class="btn btn-primary">tambah data</button>
            </form>
        </div>
    </div>
</div>