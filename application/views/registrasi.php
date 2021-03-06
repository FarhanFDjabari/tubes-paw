<body class="bg-gradient-dark">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
                            </div>
                            <form method="post" action="<?= base_url('registrasi/index'); ?>" class="user">
                                <div class="form-group">
                                    <label for="">Tipe Pengguna</label>
                                    <select class="form-control" name="role_id" id="">
                                        <option value=2>Penjual</option>
                                        <option value=3>Pembeli</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user" id="exampleInputName" placeholder="Nama Lengkap">
                                    <?= form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username">
                                    <?= form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password_1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        <?= form_error('password_1', '<div class="text-danger small ml-2">', '</div>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password_2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-user btn-block">Daftar</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/login'); ?>">Sudah Punya Akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>