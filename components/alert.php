<?php if(isset($result) && $result) { ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Aksi Berhasil
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } else if(isset($result) && !$result) { ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Terjadi kesalahan
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>