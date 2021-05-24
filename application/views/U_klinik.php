<div class="container">
  <h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
  <h4 class="title"><i class="fas fa-columns"></i>&nbsp Update Data Klinik</h4><br>
  <?= $this->session->userdata("notif_edit");$this->session->unset_userdata("notif_edit")?>
  <form action="<?=base_url('C_setup_klinik/post_edit/').$id ?>" method="POST"  enctype="multipart/form-data">
    <div class="card-body">
      <div class="form-group">
              <label for="nama_klinik">Nama Klinik</label>
              <input required type="text" value="<?=$rs_klinik[0]->nama_klinik?>" name="nama_klinik" id="nama_klinik" class="form-control" placeholder="Nama Klinik">
      </div>
      <div class="form-group">
              <label for="alamat_klinik">Alamat Klinik</label>
              <Textarea required name="alamat_klinik" id="alamat_klinik" class="form-control" cols="50" rows="20"><?=$rs_klinik[0]->alamat_klinik?></textarea>
      </div>
      <div class="form-group">
              <label for="inputPhone">Telepon</label>
              <div class="input-group">
                <input required type="number" value="<?=$rs_klinik[0]->telp_klinik?>" name="telp_klinik" class="form-control" id="inputPhone">
              </div>
            </div>
      <div class="form-group">
        <label for="alamat_klinik">Tentang</label>
        <Textarea required name="tentang" id="tentang"  class="form-control" cols="50" rows="20"><?=$rs_klinik[0]->tentang?></textarea>
      </div>
      <div class="form-group">
          <label for="status">Status (Visible)</label>
          <select required name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
              <option <?= $rs_klinik[0]->status==""?"selected":"" ?> value="">Pilih Status</option>
              <option <?= $rs_klinik[0]->status=="0"?"selected":"" ?> value="0">Aktif</option>
              <option <?= $rs_klinik[0]->status=="1"?"selected":"" ?> value="1">Tidak Aktif</option>
          </select>
      </div>
      <div class="form-group">
        <label for="inputPhone">Location</label>
        <div class="input-group">
          <input type="text" value="<?=$rs_klinik[0]->latitude?>" name="latitude" class="form-control" placeholder="latitude">
          <input type="text" value="<?=$rs_klinik[0]->longitude?>" name="longitude" class="form-control" placeholder="longitude">
        </div>
      </div>

      <div class="form-group">
          <label for="status">Fasilitas</label>
          <button type="button"class="btn btn-primary float-right btn-sm" onclick="$('#modalfasilitas').modal('toggle');">Tambah Fasilitas</button>
          <table class="table table-shopping">
            <thead>
            <tr>
            <td>No</td>
            <td>Fasilitas</td>
            </tr>
            </thead>
            <tbody id="detail">
            <?php 
              $id = $rs_klinik[0]->id_klinik;
              $query = "SELECT k.id_klinik, kf.id_fasilitas, f.nama_fasilitas 
                        FROM t_klinik k,t_fasilitas f,t_klinik_fasilitas kf
                        where
                          k.id_klinik = $id
                          AND kf.id_klinik = k.id_klinik
                          AND f.id_fasilitas = kf.id_fasilitas
                        ";
              $rs_fasilitas_query = $this->db->query($query)->result();
              foreach($rs_fasilitas_query as $fas){
            ?>
            <tr id='<?=$fas->id_fasilitas?>'>
              <td><button id='del<?=$fas->id_fasilitas?>' onclick='f_row_del(<?=$fas->id_fasilitas?>)' class='btn btn-primary btn-sm'>Hapus</button></td>
              <td><input type='hidden' id='input<?=$fas->id_fasilitas?>' value='<?=$fas->id_fasilitas?>' name='fasilitas[]'><?=$fas->nama_fasilitas?></td>
            </tr>
            <?php } ?>
            </tbody>
          </table>
      </div>

      <div class="form-group">
        <span class="btn btn-raised btn-round btn-primary btn-file">
          <span class="fileinput-new">Pilih Gambar</span>
          <input type="file" name="image" onchange="previewFile(this);"/>
        </span>
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
          <div class="fileinput-new thumbnail">
            <?php if($rs_klinik[0]->img_path!=""||$rs_klinik[0]->img_path!=null){?>
              <img id="previewImg" src="<?= base_url('uploads/').$rs_klinik[0]->img_path?>" alt="pic">
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



<div class="modal fade" id="modalfasilitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="card modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah fasilitas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body">
        <table class="table table-shopping" style="font-color:black">
          <tr>
          <td>Aksi</td>
          <td>Fasilitas</td>
          </tr>
          <?php $i=0; foreach($rs_fasilitas as $fasilitas){ $i++;?>
            <tr onclick="f_row_click('<?= $fasilitas->id_fasilitas?>','<?= $fasilitas->nama_fasilitas?>')">
            <td><?=$i?></td>
            <td><?=$fasilitas->nama_fasilitas?></td>
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


    function f_row_click(id_fasilitas,nama_fasilitas){
      console.log($("#"+id_fasilitas).html())
        if($("#input"+id_fasilitas).val()==id_fasilitas){
          alert("Data Duplikat");
        }else{
          var ls_append = "";
          ls_append += "<tr id='"+id_fasilitas+"'>"+
            "<td><button id='del"+id_fasilitas+"' onclick='f_row_del("+id_fasilitas+")' class='btn btn-primary btn-sm'>Hapus</button></td>"+
            "<td><input type='hidden' id='input"+id_fasilitas+"' value='"+id_fasilitas+"' name='fasilitas[]'>"+nama_fasilitas+"</td>"
          "</tr>";
          $('#detail').append(ls_append); 
        }  
        $('#modalfasilitas').modal('toggle');
    }

    function f_row_del(id_fasilitas){
      $("#"+id_fasilitas).remove();
    }
</script>