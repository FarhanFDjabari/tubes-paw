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
                            <label for="onDeleteConfirmationName">Nama</label>
                            <input type="text" class="form-control" id="onDeleteConfirmationName" aria-describedby="namaProduk" name="name" value="<?= $nama ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="onDeleteConfirmationUsername">Username</label>
                            <input type="text" class="form-control" id="onDeleteConfirmationUsername" aria-describedby="keterangan" name="keterangan" value="<?= $username ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="onDeleteConfirmationRole">Role</label>
                            <input type="text" class="form-control" id="onDeleteConfirmationRole" aria-describedby="kateogri" name="kategori" value="<?= $role ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <form method="POST" action="<?= base_url() . "admin/data_user/destroy" ?>">
                <input type="hidden" name="id" value="<?= $id?>">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>