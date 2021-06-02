<?php 
$join = $this->db->query("SELECT * FROM t_maaping_screening WHERE skor <= '$total_skor' and skor_akhir >= '$total_skor'")->result();
?>
<div class="container">
<h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.location='<?=base_url('C_screening')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp hasil Screening</h4>
    <div class="card">
    <div class="card-body">
            <h4 class="text-center">Skor Anda : </h4>
            <div style="font-size:100px;color:white;" class="text-center m-0"><?=$total_skor?></div>
    </div>
    <hr>
    <div class="card-body">
            <h4 class="text-center">Anda Termasuk :</h4>
            <?php if($join[0]->kel_resiko == "RENDAH"){ ?>
                <h4 class="text-center btn-lg btn-danger">Resiko <?=$join[0]->kel_resiko?></h4>
            <?php  } ?>
            <?php if($join[0]->kel_resiko == "TINGGI"){ ?>
                <h4 class="text-center btn-lg btn-danger">Resiko <?=$join[0]->kel_resiko?></h4>
            <?php  } ?>
            <?php if($join[0]->kel_resiko == "SANGAT TINGGI"){ ?>
                <h4 class="text-center btn-lg btn-danger">Resiko <?=$join[0]->kel_resiko?></h4>
            <?php  } ?>
    </div>
    <hr>
    <div class="card-description">
        <h4 class="text-center">Program Perencanaan Persalinan dan Pencegahan Komplikasi</h4>
        <hr>
        <p class="text-justify">Anda Berada dalam kelompok resiko <?=strtolower($join[0]->kel_resiko)?> disarankan menjalani perawatan oleh <?=strtolower($join[0]->perawatan)?> dan <?=$join[0]->perawatan=="TIDAK"?"Tidak Perlu":"Perlu"?> melakukan rujukan, berdasarkan dari kelompok resiko kehamilan anda tempat persalianan yang kami sarankan adalah di <?=strtolower($join[0]->tempat)?> dan disarankan ditangani oleh <?=strtolower($join[0]->penolong)?>, untuk menangani pencegahan komplikasi dalam kehamilan anda disarankan untuk mempersiapkan <?=strtolower($join[0]->pencegahan)?>
        </p>
    </div>
    </div>
</div>