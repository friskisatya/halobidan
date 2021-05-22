<div class="container">
<h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Update Data tentang</h4>
    <?= $this->session->userdata("notif_edit");$this->session->unset_userdata("notif_edit")?>
        <form action="<?=base_url('C_setup_tentang/post_edit/').$id ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                    <label for="alamat_klinik">Tentang</label>
                    <Textarea required name="tentang" id="tentang" class="form-control" cols="50" rows="20"><?=$rs_tentang[0]->tentang?></textarea>
            </div>
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>