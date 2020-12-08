<!-- On Confirm -->
<script>
    <?php
    $status = $this->session->flashdata('isSuccess');
    switch ($status) {
        case 'delete':
    ?>
            Swal.fire(
                'Status penghapusan data',
                'Penghapusan Data berhasil dilakukan!',
                'success'
            )
        <?php
            break;

        case 'edit':
        ?>
            Swal.fire(
                'Status pengeditan data',
                'Pengeditan Data berhasil dilakukan!',
                'success'
            )
        <?php
            break;

        case 'add':
        ?>
            Swal.fire(
                'Status penambahan data',
                'Penambahan Data berhasil dilakukan!',
                'success'
            )
    <?php
            break;
    }

    ?>
</script>