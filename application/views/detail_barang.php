<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" src="<?= base_url() . '/uploads//' . $brg->gambar ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?= $brg->nama_barang ?></strong></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                </td>
                                <td><strong><?= $brg->keterangan ?></strong></td>
                            </tr>

                            <tr>
                                <td>Kategori</td>
                                <td><strong><?= $brg->kategori ?></strong></td>
                            </tr>

                            <tr>
                                <td>Stok</td>
                                <td><strong><?= $brg->stok ?></strong></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-success">
                                            Rp. <?= number_format($brg->harga, 0, ',', '.') ?>
                                        </div>
                                    </strong>
                                </td>
                            </tr>

                        </table>
                        <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_barang, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                        <?= anchor('welcome/index/', '<div class="btn btn-sm btn-secondary">Kembali</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>