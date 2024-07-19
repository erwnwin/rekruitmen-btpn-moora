<?php if (
    $this->session->has_userdata('success')
) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h6><i class="fas fa-check"></i><b> Sukses!</b></h6>
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php } ?>