<div class="card-wrapper">
    <div class="card-body">
<!-- <h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6> -->
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Sunting Artikel</h4>
    <?= $this->session->userdata("notif_edit");$this->session->unset_userdata("notif_edit")?>
        <form action="<?=base_url('C_setup_artikel/post_edit_web/').$id ?>" method="POST">
    <form action="">
        <div class="card-body">
            <div class="form-group">
                    <label for="judul_artikel">Judul Artikel</label>
                    <input type="text" name="judul_artikel" id="judul_artikel" class="form-control" placeholder="Judul Artikel" value="<?=$rs_artikel[0]->judul_artikel?>">
            </div>
            <div class="form-group">
                <label for="artikel">Isi Artikel</label>
                <textarea name="isi_artikel" id="isi_artikel" cols="50" rows="20" class="form-control" wordwrap="true"><?=$rs_artikel[0]->isi_artikel?></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status (Visible)</label>
                <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                <option <?=$rs_artikel[0]->status_artikel==""?"selected":"" ?> value="">Pilih Status</option>
                        <option <?=$rs_artikel[0]->status_artikel=="0"?"selected":"" ?> value="0">Aktif</option>
                        <option <?=$rs_artikel[0]->status_artikel=="1"?"selected":"" ?> value="1">Tidak Aktif</option>
                </select>
            </div>
            <div class="form-group">
           <span class="btn btn-raised btn-round btn-primary btn-file">
              <span class="fileinput-new">Select image</span>
              <input type="file" name="pic" />
           </span>
           <div class="fileinput fileinput-new text-center" data-provides="fileinput">
            <div class="fileinput-new thumbnail">
           <img src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" alt="pic">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail"></div>
         </div>
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>
</div>