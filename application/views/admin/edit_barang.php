<div class="container-fluid">
    <h3>
        <i class="fas fa-edit"></i>
        Edit Data Produk
    </h3>

    <?php foreach ($barang as $brg) : ?>
        <form action="<?= base_url() . 'admin/data_barang/update' ?>" method="post">

            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="nama_barang" class="form-control" value="<?= $brg->nama_barang ?>">
            </div>

            <div class="form-group">
                <label for="">Keterangan</label>

                <input type="hidden" name="id_barang" class="form-control" value="<?= $brg->id_barang ?>">

                <input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan ?>">
            </div>

            <div class="form-group">
                <label for="">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?= $brg->kategori ?>">
            </div>

            <div class="form-group">
                <label for="">Harga</label>
                <input type="number" name="harga" class="form-control" value="<?= $brg->harga ?>">
            </div>

            <div class="form-group">
                <label for="">Stok</label>
                <input type="number" name="stok" class="form-control" value="<?= $brg->stok ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>