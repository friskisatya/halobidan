<div class="container">
    <h6 class="title float-right btn-sm btn-primary" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <?php
    foreach($rs_klinik as $klinik){
    ?>
    <h4 class="title"><i class="fas fa-hospital-alt"></i>&nbsp <?=$klinik->nama_klinik?></h4>

    <p class="card-title"><i class="fas fa-info-circle"></i>&nbsp informasi klinik ini</p>
    
    <div class="card">
        <img class="card-img-top" src="<?= base_url('uploads/').$klinik->img_path?>" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title text-center">Tentang</h4>
            <p class="card-text text-justify"><?=$klinik->tentang?></p>
        </div>
        <div class="card-body">
            <h4 class="card-title text-center">Fasilitas</h4>
            <div class="row">
                <?php
                $rs_fasilitas = $this->db->query("
                SELECT 
                    tf.id_fasilitas,
                    tf.nama_fasilitas
                FROM 
                    t_klinik_fasilitas tkf,
                    t_fasilitas tf
                WHERE 
                    tkf.id_klinik = '$klinik->id_klinik'
                    AND tkf.id_fasilitas = tf.id_fasilitas
                ")->result();
                foreach($rs_fasilitas as $fasilitas){
                ?>
                <div class="col-4">
                    <p><?=$fasilitas->nama_fasilitas?></p>
                </div>
                <div class="col-2">
                    <i class="fas fa-check"></i>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- <img class="card-img-top" src="<?= base_url()?>/assets/img/maps.png" alt="maps" href="<?=base_url()?>"> -->
        <div class="card-body">
            <h4 class="card-title text-center" href="<?=base_url()?>"><?=$klinik->alamat_klinik?></h4>
            <p class="card-text text-justify"><?=$klinik->keterangan?></p>
            <div class="row">
                <a href="#" class="col" onclick="f_telp('<?=$klinik->telp_klinik?>')">
                    <h4 class="btn btn-md btn-info">Telepon</h4>
                </a>
                <a href="#"  onclick="f_location('<?=$klinik->latitude?>','<?=$klinik->longitude?>')" class="col">
                    <h4 class="btn btn-md btn-info">Petunjuk Arah</h4>
                </a>
            </div>
        </div>
        <hr>
        <h5 class="text-center">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                Daftar Bidan
            </button>
        </h5>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="table-responsive">
                    <table class="table table-shopping">
                        <thead>
                        </thead>
                        <tbody>
                        <?php
                        $rs_bidan = $this->db->query("
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

                        foreach($rs_bidan as $bidan){
                            $awal  = date_create($bidan->mulai_bekerja);
                            $akhir = date_create(); // waktu sekarang
                            $diff  = date_diff( $awal, $akhir );
                        ?>
                            <tr>
                                <td>
                                    <div class="img-container">
                                        <div class="card bg-dark text-white">
                                            <img class="card-img" src="<?= base_url()?>/assets/img/<?=$bidan->img_profile?>"
                                                alt="bidan" style="width: 15rem;">
                                            <div
                                                class="card-img-overlay d-flex h-10 flex-column justify-content-end p-0">
                                                <h5 class="card-title text-center btn-warning"><?= $diff->y?> tahun</h5>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-center text-capitalize"><?=$bidan->nama_bidan?></p>
                                </td>
                                <td>
                                <?php 
                                if ($this->session->userdata('email')=="" OR empty($this->session->userdata('email'))) {
                                    $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Terlebih Dahulu</font></span>");
                                    
                                }else{
                                ?>
                                    <button onclick="f_telp_bidan('<?=$bidan->telp_bidan?>')" class="btn-xm btn-primary">Chat</button>
                                <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<script>
function f_location(latitude,longitude){
    // If it's an iPhone..
    if( (navigator.platform.indexOf("iPhone") != -1) 
        || (navigator.platform.indexOf("iPod") != -1)
        || (navigator.platform.indexOf("iPad") != -1))
         window.open("maps://www.google.com/maps/dir/?api=1&travelmode=driving&layer=traffic&destination="+latitude+","+longitude);
    else
         window.open("https://www.google.com/maps/dir/?api=1&travelmode=driving&layer=traffic&destination="+latitude+","+longitude);
        //   window.open("https://wa.me/6282130327606?text=Saya%20ingin%20bertanya%20tentang%20rumah%20yang%20dijual");
}
function f_telp(telp){
    window.open("https://wa.me/"+telp+"?text=Saya%20ingin%20bertanya%20tentang%20rumah%20yang%20dijual");
}
function f_telp_bidan(telp){
    window.open("https://wa.me/"+telp+"?text=Saya%20ingin%20bertanya%20tentang%20rumah%20yang%20dijual");
}
</script>
<!-- end of article -->