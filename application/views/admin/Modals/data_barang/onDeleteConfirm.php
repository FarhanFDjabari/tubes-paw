<div class="modal fade" id="deleteModal<?php echo $no ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Konfirmasi Penghapusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">
                Apakah Anda yakin untuk menghapus data ini? <br>
                <div role="form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="onDeleteConfirmationName">Nama Produk</label>
                            <input type="text" class="form-control" id="onDeleteConfirmationName" aria-describedby="namaProduk" name="name" value="<?= $nama_barang ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="onDeleteConfirmationKeterangan">Keterangan</label>
                            <input type="text" class="form-control" id="onDeleteConfirmationKeterangan" aria-describedby="keterangan" name="keterangan" value="<?= $keterangan ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="onDeleteConfirmationKategori">Kategori</label>
                            <input type="text" class="form-control" id="onDeleteConfirmationKategori" aria-describedby="kateogri" name="kategori" value="<?= $kategori ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="onDeleteConfirmationHarga">Harga</label>
                            <input type="text" class="form-control" id="onDeleteConfirmationHarga" aria-describedby="harga" name="harga" value="<?= $harga ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="onDeleteConfirmationStock">Stock</label>
                            <input type="text" class="form-control" id="onDeleteConfirmationStock" aria-describedby="stock" name="stock" value="<?= $stok ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <form method="POST" action="<?= base_url() . "admin/data_barang/hapus/$id_barang" ?>">
                <input type="hidden" name="nomorProgram" value="">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>