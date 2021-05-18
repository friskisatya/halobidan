<div class="card-wrapper">
    <div class="card-body">
        <h6 class="title float-right btn-sm btn-primary" onclick="window.location='<?=base_url('C_setup_klinik/create_web')?>'"><i class="fas fa-plus"></i>&nbsp Tambah</h6>
        <h4 class="title"><i class="fas fa-columns"></i>&nbsp Setup Klinik</h4><br>
        <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
        <?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
        
            <table class="table ">
                <thead>
                    <th>Nama Klinik</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                foreach($rs_klinik as $klinik)
                {
                ?>
                    <tr>
                        <td>
                            <p class="text-center text-capitalize">
                                <?= $klinik->nama_klinik?>
                            </p>
                        </td>
                        <td>
                            <p class="text-center text-capitalize">
                                <?= $klinik->alamat_klinik?>
                            </p>
                        </td>
                        <td>
                            <button
                                class="btn btn-primary btn-sm m-1" data-toggle="modal" data-target="#delete" type="button">Hapus</button>
                            <button onclick="window.location='<?=base_url('C_setup_klinik/edit_web/').$klinik->id_klinik?>'"
                                class="btn btn-primary btn-sm m-1">Ubah</button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
    </div>
</div>
<!-- Modal -->
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
        <button type="button" class="btn btn-primary" onclick="window.location='<?=base_url('C_setup_klinik/delete_web/').$klinik->id_klinik?>'">Hapus</button>
      </div>
    </div>
  </div>
</div>