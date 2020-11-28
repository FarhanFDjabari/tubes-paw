<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "Total Belanja: Rp. " . number_format($grand_total, 0, ',', '.');

                ?>
            </div><br>
            <h3>Infomasi Pembeli</h3>

            <form action="<?= base_url('dashboard/proses_pesanan') ?>" method="post">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="ex. Yudhistira Eka" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="ex. Jl. Dirgantara V No.26, Kedungkandang, Malang">
                </div>

                <div class="form-group">
                    <label for="">No. Hp</label>
                    <input type="number" name="no_telp" class="form-control" placeholder="ex. 081234567890">
                </div>

                <div class="form-group">
                    <label for="">Kurir Pengiriman</label>
                    <select class="form-control" name="" id="">
                        <option value="">JNE Reg</option>
                        <option value="">JNT Reg</option>
                        <option value="">JNE Yes</option>
                        <option value="">Sicepat Reg</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Pilih Pembayaran</label>
                    <select class="form-control" ame="" id="">
                        <option value="">Bank Mandiri</option>
                        <option value="">Bank BNI</option>
                        <option value="">Bank BRI</option>
                        <option value="">Go-Pay</option>
                        <option value="">Kartu Kredit</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

            </form>

        <?php
                } else {
                    echo "Keranjang Belanja Anda Masih Kosong";
                }
        ?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>