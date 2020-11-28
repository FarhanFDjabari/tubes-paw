<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahProduk">
        <i class="fas fa-plus fa-sm"></i> Tambah Produk
    </button>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Foto Produk</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php $no = 1;
        foreach ($barang as $brg) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><img src="<?= base_url() . '/uploads//' . $brg->gambar ?>" style="width: 8rem;" alt="..."></td>
                <td><?= $brg->nama_barang ?></td>
                <td><?= $brg->keterangan ?></td>
                <td><?= $brg->kategori ?></td>
                <td><?= $brg->harga ?></td>
                <td><?= $brg->stok ?></td>
                <td>
                    <div class="btn btn-success btn-sm">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </td>
                <td>
                    <?= anchor(
                        'admin/data_barang/edit/' . $brg->id_barang,
                        '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'
                    ) ?>

                </td>
                <td>
                    <?= anchor(
                        'admin/data_barang/hapus/' .
                            $brg->id_barang,
                        ' <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'
                    ) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahProduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Produk</label>
                        <input type="text" name="nama_barang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select class="form-control" name="kategori" id="">
                            <option value="Snacks">Snacks</option>
                            <option value="Fruit & Vegies">Fruit & Vegies</option>
                            <option value="Meat">Meat</option>
                            <option value="Home Tools">Home Tools</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="number" name="stok" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>