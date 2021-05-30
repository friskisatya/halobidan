<div class="container-fluid">
    <h4 class="title"><i class="fas fa-user-nurse"></i>&nbsp Chat Dengan Bidan</h4>
    <p>Nikmati Kemudahan berkonsultasi dengan bidan yang berpengalaman</p>
    <div class="table-responsive">
        <table class="table table-shopping">
            <?php
            foreach($rs_klinik as $klinik){
            ?>
            <thead>
                <tr>
                    <th class="text-left" colspan="3">Klink/Rumah Sakit : <?=$klinik->nama_klinik?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query_anggota = $this->db->query("
                    SELECT 
                        tb.id_bidan,
                        tb.nama_bidan,
                        tb.mulai_bekerja,
                        tb.img_profile,  
                        tb.telp_bidan
                    FROM 
                        t_klinik_anggota tka,
                        t_bidan tb 
                    WHERE 
                        tka.id_klinik = '$klinik->id_klinik'
                        AND tka.id_bidan = tb.id_bidan
                ")->result();

                foreach($query_anggota as $bidan){
                    $awal  = date_create($bidan->mulai_bekerja);
                    $akhir = date_create(); // waktu sekarang
                    $diff  = date_diff( $awal, $akhir );
                ?>
                <tr>
                    <td>
                        <div class="img-container">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="<?= base_url()?>uploads/<?=$bidan->img_profile?>" alt="bidan"
                                    style="width: 15rem;">
                                <div class="card-img-overlay d-flex h-10 flex-column justify-content-end p-0">
                                    <h5 class="card-title text-center btn-warning"><?= $diff->y?> Tahun</h5>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-center text-capitalize"><?=$bidan->nama_bidan?></p>
                    </td>
                    <td>
                    <button onclick="f_telp_bidan('<?=$bidan->telp_bidan?>')" class="btn-xm btn-primary">Chat</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            <?php } ?>
        </table>
    </div>
</div>

<script>
function f_telp_bidan(telp){
    window.open("https://wa.me/"+telp+"?text=Saya%20ingin%20bertanya%20tentang%20rumah%20yang%20dijual");
}
</script>
<!-- end of article -->