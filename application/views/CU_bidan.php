<div class="container">
    <h6 class="title float-right btn-sm btn-primary ml-1"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Data Bidan</h4>
    <form action="">
        <div class="card-body">
            <div class="form-group">
                    <label for="nama_bidan">Nama Bidan</label>
                    <input type="text" name="nama_bidan" id="nama_bidan" class="form-control" placeholder="Nama Bidan">
            </div>
            <div class="form-group">
                <label for="klinik">Klinik</label>
                <select name="klinik" id="klinik" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="">Pilih Klinik</option>
                    <option value="N/A">Buka Praktek Sendiri</option>
                </select>
            </div>
            <div class="form-group">
                    <label for="pengalaman">Pengalaman</label>
                    <input type="number" name="pengalaman" id="pengalaman" class="form-control">
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