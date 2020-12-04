<div class="modal fade" id="editModal<?php echo $no ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Form Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?= base_url() . "admin/data_user/update" ?>">
                <div class="container">
                    <div role="form">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="onDeleteConfirmationName">Nama</label>
                                <input type="text" class="form-control" id="onDeleteConfirmationName" aria-describedby="namaProduk" name="name" value="<?= $nama ?>">
                            </div>
                            <div class="form-group">
                                <label for="onDeleteConfirmationUsername">Username</label>
                                <input type="text" class="form-control" id="onDeleteConfirmationUsername" aria-describedby="keterangan" name="username" value="<?= $username ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputRole">Role</label>
                                <select class="form-control" name="role_id" id="inputRole">
                                    <option value="1">Admon</option>
                                    <option value="2">Merchant</option>
                                    <option value="3">End User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>