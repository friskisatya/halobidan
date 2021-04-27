<div class="container">
    <h6 class="title float-right btn-sm btn-primary ml-1"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Data Klinik</h4>
    <form action="">
        <div class="card-body">
            <div class="form-group">
                    <label for="nama_klinik">Nama Klinik</label>
                    <input type="text" name="nama_klinik" id="nama_klinik" class="form-control" placeholder="Nama Klinik">
            </div>
            <div class="form-group">
                    <label for="alamat_klinik">Alamat Klinik</label>
                    <Textarea name="alamat_klinik" id="alamat_klinik" class="form-control" cols="50" rows="20"></textarea>
            </div>
            <div class="form-group">
                <label for="fasilitas">Fasilitas</label>
                <select name="fasilitas" id="fasilitas" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="">Pilih Fasilitas</option>
                </select>
                <button class="btn-sm btn-primary btn-round mt-2">Tambah Fasilitas</button>
            </div>
            <div class="form-group">
                    <label for="inputPhone">Telepon</label>
                    <div class="input-group">
                      <input type="number" name="no_telp" class="form-control" id="inputPhone">
                    </div>
                  </div>
            <div class="form-group">
                <label for="status">Status (Visible)</label>
                <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="">Pilih Status</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>
            <div class="form-group">
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
         </div>
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>