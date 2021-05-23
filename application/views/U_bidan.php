<div class="container">
<h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Update Data Bidan</h4>
    <?= $this->session->userdata("notif_edit");$this->session->unset_userdata("notif_edit")?>
        <form action="<?=base_url('C_setup_bidan/post_edit/').$id ?>" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                    <label for="nama_bidan">Nama Bidan</label>
                    <input type="text" name="nama_bidan" id="nama_bidan" class="form-control" placeholder="Nama Bidan" required value="<?=$rs_bidan[0]->nama_bidan?>">
            </div>
            
            <div class="form-group">
                    <label for="mulai_bekerja">Mulai Bekerja</label>
                    <input type="date" name="mulai_bekerja" id="mulai_bekerja" class="form-control" value="<?=$rs_bidan[0]->mulai_bekerja?>">
            </div>
            <div class="form-group">
              <label for="alamat_bidan">Alamat Bidan</label>
              <Textarea required name="alamat_bidan" id="alamat_bidan" class="form-control" cols="50" rows="20"><?=$rs_bidan[0]->alamat_bidan?></textarea>
      </div>
      <div class="form-group">
              <label for="telp_bidan">Telepon Bidan</label>
              <div class="input-group">
                <input required type="number" name="telp_bidan" class="form-control" id="telp_bidan" required value="<?=$rs_bidan[0]->telp_bidan?>">
              </div>
            </div>
            <div class="form-group">
                <label for="Gelar">Gelar</label>
                <select name="gelar" id="gelar" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" >
                <option <?=$rs_bidan[0]->gelar==""?"selected":"" ?> value="">Pilih Gelar</option>
                        <option <?=$rs_bidan[0]->gelar=="Amd.Keb"?"selected":"" ?> value="Amd.Keb">Amd.Keb</option>
                        <option <?=$rs_bidan[0]->gelar=="S.Tr.Keb."?"selected":"" ?> value="S.Tr.Keb.">S.Tr.Keb.</option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="status">Status (Visible)</label>
                <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" required>
                    <option value="">Pilih Status</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div> -->
            <div class="form-group">
        <span class="btn btn-raised btn-round btn-primary btn-file">
          <span class="fileinput-new">Pilih Gambar</span>
          <input type="file" name="image" onchange="previewFile(this);"/>
        </span>
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
          <div class="fileinput-new thumbnail">
            <?php if($rs_bidan[0]->img_profile!=""||$rs_bidan[0]->img_profile!=null){?>
              <img id="previewImg" src="<?= base_url('uploads/').$rs_bidan[0]->img_profile?>" alt="pic">
            <?php
            }else{
            ?>
              <img id="previewImg" src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" alt="pic">
            <?php
            }
            ?>
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail"></div>
        </div>
      </div>
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>