<div class="card-wrapper">
    <div class="card-body">
<!-- <h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6> -->
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Update FAQ</h4>
    <?= $this->session->userdata("notif_edit");$this->session->unset_userdata("notif_edit")?>
        <form action="<?=base_url('C_setup_faq/post_edit_web/').$id ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="ask">Ask</label>
                <textarea name="ask" id="ask" cols="50" rows="20" class="form-control"><?=$rs_faq[0]->ask?></textarea>
            </div>
            <div class="form-group">
                <label for="Question">Question</label>
                <textarea name="question" id="question" cols="50" rows="20" class="form-control"><?=$rs_faq[0]->question?></textarea>
            </div>
            <div class="form-group">
                <label for="status_faq">Status Visible</label>
                <select name="status_faq" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                <option <?=$rs_faq[0]->status_faq==""?"selected":"" ?> value="">Pilih Status</option>
                        <option <?=$rs_faq[0]->status_faq=="0"?"selected":"" ?> value="0">Aktif</option>
                        <option <?=$rs_faq[0]->status_faq=="1"?"selected":"" ?> value="1">Tidak Aktif</option>
                </select>
            </div>
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>
</div>