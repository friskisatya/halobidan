<div class="container">
<h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
<h6 class="title float-right btn-sm btn-primary" onclick="window.location='<?=base_url('C_setup_faq/create')?>'"><i class="fas fa-plus"></i>&nbsp Tambah</h6>
<h4 class="title"><i class="fas fa-columns"></i>&nbsp Setup FAQ</h4><br>
<?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
<?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
<div class="table-responsive">
        <table class="table table-shopping">
            <thead>
                <th>Ask</th>
                <th>Question</th>
                <th>Status</th>
                <th class="text_right">Aksi</th>
            </thead>
            <tbody>
            <?php
                foreach($rs_faq as $bid)
                {
                ?>
                    <tr>
                        <td>
                            <p class="text-center text-capitalize">
                                <?= $bid->ask?>
                            </p>
                        </td>
                        <td>
                            <p class="text-center text-capitalize">
                            <?= $bid->question?>
                            </p>
                        </td>
                        <td>
                            <p class="text-center text-capitalize">
                                <?= $bid->status_faq?>
                            </p>
                        </td>
                        <td>
                        <button
                                class="btn btn-primary btn-sm m-1" data-toggle="modal" data-target="#delete" type="button">Hapus</button>
                            <button onclick="window.location='<?=base_url('C_setup_faq/edit/').$bid->id_faq?>'"
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
        <button type="button" class="btn btn-primary" onclick="window.location='<?=base_url('C_setup_faq/delete/').$bid->id_faq?>'">Hapus</button>
      </div>
    </div>
  </div>
</div>