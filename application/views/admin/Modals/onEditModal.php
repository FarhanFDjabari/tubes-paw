<div class="modal fade" id="editModal<?php echo $no ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Form edit barang!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?= base_url() . "admin/data_barang/update" ?>">
                <div class="container">
                    <!-- Form Edit Barang <br> -->
                    <div role="form">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="onDeleteConfirmationName">Nama Produk</label>
                                <input type="text" class="form-control" id="onDeleteConfirmationName" aria-describedby="namaProduk" name="nama_barang" value="<?= $nama_barang ?>">
                            </div>
                            <div class="form-group">
                                <label for="onDeleteConfirmationKeterangan">Keterangan</label>
                                <input type="text" class="form-control" id="onDeleteConfirmationKeterangan" aria-describedby="keterangan" name="keterangan" value="<?= $keterangan ?>">
                            </div>
                            <div class="form-group">
                                <label for="onDeleteConfirmationKategori">Kategori</label>
                                <input type="text" class="form-control" id="onDeleteConfirmationKategori" aria-describedby="kateogri" name="kategori" value="<?= $kategori ?>">
                            </div>
                            <div class="form-group">
                                <label for="onDeleteConfirmationHarga">Harga</label>
                                <input type="text" class="form-control" id="onDeleteConfirmationHarga" aria-describedby="harga" name="harga" value="<?= $harga ?>">
                            </div>
                            <div class="form-group">
                                <label for="onDeleteConfirmationStock">Stock</label>
                                <input type="text" class="form-control" id="onDeleteConfirmationStock" aria-describedby="stock" name="stok" value="<?= $stok ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_barang" value="<?= $id_barang?>">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>