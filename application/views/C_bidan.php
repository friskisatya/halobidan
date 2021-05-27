<div class="container">
<h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Data Bidan</h4>
    <form action="<?=base_url('C_setup_bidan/post_create')?>" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                    <label for="nama_bidan">Nama Bidan</label>
                    <input type="text" name="nama_bidan" id="nama_bidan" class="form-control" placeholder="Nama Bidan" required>
            </div>
            <div class="form-group">
                    <label for="mulai_bekerja">Mulai Bekerja</label>
                    <input type="date" name="mulai_bekerja" id="mulai_bekerja" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="alamat_bidan">Alamat Bidan</label>
              <Textarea required name="alamat_bidan" id="alamat_bidan" class="form-control" cols="50" rows="20"></textarea>
      </div>
      <div class="form-group">
              <label for="telp_bidan">Telepon Bidan</label>
              <div class="input-group">
                <input required type="number" name="telp_bidan" class="form-control" id="telp_bidan" required>
              </div>
            </div>
            <div class="form-group">
                <label for="Gelar">Gelar</label>
                <select name="gelar" id="gelar" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="">Pilih Gelar</option>
                    <option value="Amd.Keb">Amd.Keb</option>
                    <option value="S.Tr.Keb.">S.Tr.Keb.</option>
                </select>
            </div>
            <div class="form-group">
              <label for="status">Klinik</label>
              <button type="button"class="btn btn-primary float-right btn-sm" onclick="$('#modalklinik').modal('toggle');">Tambah Klinik</button>
              <table class="table table-shopping">
                <thead>
                <tr>
                <td>No</td>
                <td>Nama Klinik</td>
                </tr>
                </thead>
                <tbody id="detail">
                </tbody>
              </table>
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
            <img id="previewImg" src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" alt="pic">
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail"></div>
        </div>
      </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>


<div class="modal fade" id="modalklinik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="card modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Klinik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body">
        <table class="table table-shopping" style="font-color:black">
          <tr>
          <td>Aksi</td>
          <td>Nama Klinik</td>
          </tr>
          <?php $i=0; foreach($rs_klinik as $klinik){ $i++;?>
            <tr onclick="f_row_click('<?= $klinik->id_klinik?>','<?= $klinik->nama_klinik?>')">
            <td><?=$i?></td>
            <td><?=$klinik->nama_klinik?></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
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
    function f_row_click(id_klinik,nama_klinik){
      console.log($("#"+id_klinik).html())
        if($("#input"+id_klinik).val()==id_klinik){
          alert("Data Duplikat");
        }else{
          var ls_append = "";
          ls_append += "<tr id='"+id_klinik+"'>"+
            "<td><button id='del"+id_klinik+"' onclick='f_row_del("+id_klinik+")' class='btn btn-primary btn-sm'>Hapus</button></td>"+
            "<td><input type='hidden' id='input"+id_klinik+"' value='"+id_klinik+"' name='klinik[]'>"+nama_klinik+"</td>"
          "</tr>";
          $('#detail').append(ls_append); 
        }  
        $('#modalklinik').modal('toggle');
    }

    function f_row_del(id_klinik){
      $("#"+id_klinik).remove();
    }
</script>