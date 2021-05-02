<div class="container-fluid">
    <h4 class="title"><i class="fas fa-hospital-alt"></i>&nbsp Konsultasi Dengan Klinik</h4>
    <p>Jangkau dan Dapatkan informasi klinik di dekat anda</p>
    <div class="table-responsive">
        <table class="table table-shopping">
            <thead>

            </thead>
            <tbody>
                <?php
                foreach($rs_klinik as $klinik){
                ?>
                <tr>
                    <td>
                        <p class="text-center text-capitalize"><?=$klinik->nama_klinik?></p>
                    </td>
                    <td>
                        <p class="text-center text-capitalize"><?=$klinik->alamat_klinik?></p>
                    </td>
                    <td>
                        <a href="<?=base_url("C_index/detail_klinik/").$klinik->id_klinik?>"><button class="btn btn-primary">Detail Klinik</button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- end of article -->