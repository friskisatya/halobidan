<div class="container">
<h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
<h6 class="title float-right btn-sm btn-primary" onclick="window.location='<?=base_url('C_setup_fasilitas/create')?>'"><i class="fas fa-plus"></i>&nbsp Tambah</h6>
<h4 class="title"><i class="fas fa-columns"></i>&nbsp Setup Fasilitas Klinik</h4><br>
<?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
<?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
<div class="table-responsive">
        <table class="table table-shopping">
            <thead>
                <th>Nama Fasilitas</th>
                <th>Status</th>
                <th class="text_right">Aksi</th>
            </thead>
            <tbody>
                    <?php
                foreach($rs_fasilitas as $fas)
                {
                ?>
                    <tr>
                        <td>
                            <p class="text-center text-capitalize">
                                <?= $fas->nama_fasilitas?>
                            </p>
                        </td>
                        <td>
                            <p class="text-center text-capitalize">
                                <?= $fas->status=="0"?"Aktif":"Tidak Aktif"?>
                            </p>
                        </td>
                        <td>
                        <button
                                class="btn btn-primary btn-sm m-1" data-toggle="modal" data-target="#delete" type="button">Hapus</button>
                            <button onclick="window.location='<?=base_url('C_setup_fasilitas/edit/').$fas->id_fasilitas?>'"
                                class="btn btn-primary btn-sm m-1">Ubah</button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
        </table>
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
        <button type="button" class="btn btn-primary" onclick="window.location='<?=base_url('C_setup_fasilitas/delete/').$fas->id_fasilitas?>'">Hapus</button>
      </div>
    </div>
  </div>
</div>