<?php $this->load->view('modals/afterInvoice', ['invoice' => $invoice]) ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success">
                <h5 class="text-center align-middle">Pesanan produk anda berhasil diproses!!</h5>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <div class="row">
                <img src="<?= base_url() . "/uploads/qrcode/invoices/$invoice->qr_code" ?>" alt="Qr Code Invoice" class="img-fluid">
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <h3>Gambar di atas adalah QR Code Pesanan Anda. Hehe</h3>
        </div>
    </div>
</div>