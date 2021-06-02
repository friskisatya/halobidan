<div class="container">
<h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
<h6 class="title float-right btn-sm btn-primary" onclick="window.location='<?=base_url('C_screening/create')?>'"><i class="fas fa-plus"></i>&nbsp Screening</h6>
<h4 class="title"><i class="fas fa-columns"></i>&nbsp Screening Mandiri</h4><br>
<?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
<?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
<div class="table-responsive">
        <table class="table table-shopping">
            <thead>
                <th>Tanggal Screening</th>
                <th>Tingkat Resiko</th>
                <th class="text_right">Aksi</th>
            </thead>
            <tbody>
          
            </tbody>
        </table>
    </div>
</div>
</div>
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete">Konfirmasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
      </div>
      <div class="modal-body">
        Apakah Yakin untuk menghapus data berikut ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" onclick="window.location='<?=base_url('C_setup_bidan/delete/').$bid->id_bidan?>'">Hapus</button>
      </div>
    </div>
  </div>
</div>