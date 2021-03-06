<div class="card-wrapper">
    <div class="card-body">
  <h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
  <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Data Klinik</h4><br>
  <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
  <form action="<?=base_url('C_setup_klinik/post_create_web')?>" method="POST">
    <div class="card-body">
      <div class="form-group">
              <label for="nama_klinik">Nama Klinik</label>
              <input required type="text" name="nama_klinik" id="nama_klinik" class="form-control" placeholder="Nama Klinik">
      </div>
      <div class="form-group">
              <label for="alamat_klinik">Alamat Klinik</label>
              <Textarea required name="alamat_klinik" id="alamat_klinik" class="form-control" cols="50" rows="20"></textarea>
      </div>
      <div class="form-group">
              <label for="inputPhone">Telepon</label>
              <div class="input-group">
                <input required type="number" name="telp_klinik" class="form-control" id="inputPhone">
              </div>
            </div>
      <div class="form-group">
        <label for="alamat_klinik">Tentang</label>
        <Textarea required name="tentang" id="tentang" class="form-control" cols="50" rows="20"></textarea>
      </div>
      <div class="form-group">
          <label for="status">Status (Visible)</label>
          <select required name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
              <option value="">Pilih Status</option>
              <option value="0">Aktif</option>
              <option value="1">Tidak Aktif</option>
          </select>
      </div>
      <!-- <div class="form-group">
        <span class="btn btn-raised btn-round btn-primary btn-file">
          <span class="fileinput-new">Pilih Gambar</span>
          <input type="file" name="pic" />
        </span>
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
          <div class="fileinput-new thumbnail">
            <img src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" alt="pic">
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail"></div>
        </div>
      </div>
      <div class="form-group">
        <span class="btn btn-raised btn-round btn-primary btn-file">
          <span class="fileinput-new">Pilih Gambar Peta</span>
          <input type="file" name="pic" />
        </span>
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
        <div class="fileinput-new thumbnail">
          <img src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" alt="pic">
        </div>
        <div class="fileinput-preview fileinput-exists thumbnail"></div>
      </div> -->
    </div>
    <div class="container text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>