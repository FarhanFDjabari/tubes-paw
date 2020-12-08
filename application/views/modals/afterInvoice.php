<!-- On Confirm -->
<script>
    <?php 
        $qrCodeName = $invoice->qr_code;
    ?>
    Swal.fire({
        title: 'Selamat, transaksi Anda Berhasil!',
        text: 'QR Code Anda.',
        imageUrl: '<?= base_url()."/uploads/qrcode/invoices/$qrCodeName"?>',
        imageAlt: 'Qr Code Invoice',
    })
</script>