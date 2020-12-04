<?php $this->load->view('admin/Modals/swalFire') ?>
<div class="container-fluid">
    <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#tambahProduk">
        <i class="fas fa-plus fa-sm"></i> Tambah User
    </button>
    <table class="table table-bordered" id="tableData">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Role</th>
                <th scope="col">Lihat</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($users as $user) : ?>
                <tr>
                    <?php switch ($user->role_id) {
                        case 1:
                            $thisRole = "Admon";
                            break;
                        case 2:
                            $thisRole =  'Merchant';
                            break;
                        case 3:
                            $thisRole =  "End User";
                            break;
                    } ?>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $user->nama ?></td>
                    <td><?= $user->username ?></td>
                    <td><?= $thisRole ?></td>
                    <td>
                        <div class="btn btn-success btn-sm">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </td>
                    </td>
                    <td>
                        <div class="btn btn-primary" data-toggle="modal" data-target="#editModal<?= $no ?>"><i class="fas fa-edit"></i></div>
                        <?php $this->load->view('admin/Modals/data_user/onEditModal', [
                            'no' => $no,
                            'id' => $user->id,
                            'nama' => $user->nama,
                            'username' => $user->username,
                            'role' => $thisRole,
                        ])
                        ?>
                    </td>
                    <td>
                        <div class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $no ?>"><i class="fas fa-trash"></i></div>
                        <?php $this->load->view('admin/Modals/data_user/onDeleteConfirm', [
                            'no' => $no,
                            'id' => $user->id,
                            'nama' => $user->nama,
                            'username' => $user->username,
                            'role' => $thisRole,
                        ])
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahProduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'admin/data_user/store' ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputName">Nama</label>
                        <input type="text" name="nama" class="form-control" id="inputName" placeholder="Masukkan Nama User">
                    </div>
                    <div class="form-group">
                        <label for="inputUsername">Usernamae</label>
                        <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label for="inputRole">Role</label>
                        <select class="form-control" name="role" id="inputRole">
                            <option value="1">Admon</option>
                            <option value="2">Merchant</option>
                            <option value="3">End User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="Password" class="form-control" id="inputPassword" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label for="inputConfirm">Confirm Password</label>
                        <input type="password" name="Password" class="form-control" id="inputConfirm" placeholder="Masukkan kembali Password">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>