<div class="container">
<h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
<h6 class="title float-right btn-sm btn-primary" onclick="window.location='<?=base_url('C_setup_klinik/create')?>'"><i class="fas fa-plus"></i>&nbsp Tambah</h6>
<h4 class="title"><i class="fas fa-columns"></i>&nbsp Setup Klinik</h4><br>
<?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
<div class="table-responsive">
        <table class="table table-shopping">
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
                        <p class="text-center text-capitalize"><?= $klinik->nama_klinik?></p>
                    </td>
                    <td>
                        <p class="text-center text-capitalize"><?= $klinik->alamat_klinik?></p>
                    </td>
                    <td>
                    <button onclick="window.location='<?=base_url('C_setup_klinik/delete/').$klinik->id_klinik?>'" class="btn btn-primary btn-sm m-1">Hapus</button>
                    <button onclick="window.location='<?=base_url('C_setup_klinik/edit/').$klinik->id_klinik?>'" class="btn btn-primary btn-sm m-1">Ubah</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>