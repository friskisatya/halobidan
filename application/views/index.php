<div class="container-fluid">
<h4 class="title"><i class="fas fa-columns"></i>&nbsp Layanan</h4>
    <div class="row text-center flex-nowrap" style="overflow: auto;">
        <div class="btn btn-sm col-4 m-1" onclick="window.location='<?=base_url('C_index/chat_bidan')?>'">
            <div class="card-wrapper">
            <img class="card-img-top rounded mx-auto d-block mt-1" src="<?= base_url()?>/assets/img/consulting.png" alt="Card image cap" style ="width : 3rem ; height : 3rem;">
                <div class="card-body p-1">
                    <h6 class="card-title">Chat Dengan Bidan</h6>
                </div>
            </div>
        </div>

        <div class="btn btn-sm col-4 m-1" onclick="window.location='<?=base_url('C_index/konsultasi_klinik')?>'">
            <div class="card-wrapper">
            <img class="card-img-top rounded mx-auto d-block mt-1" src="<?= base_url()?>/assets/img/clinic.png" alt="Card image cap" style ="width : 3rem ; height : 3rem;">
                <div class="card-body p-1">
                    <h6 class="card-title">Konsultasi Dengan Klinik</h6>
                </div>
            </div>
        </div>

        <div class="btn btn-sm col-4 m-1" onclick="window.location='<?=base_url('C_index/kalkulator_kehamilan')?>'">
            <div class="card-wrapper">
            <img class="card-img-top rounded mx-auto d-block mt-1" src="<?= base_url()?>/assets/img/calc.png" alt="Card image cap" style ="width : 3rem ; height : 3rem;">
                <div class="card-body p-1">
                    <h6 class="card-title">Kalkulator Kehamilan</h6>
                </div>
            </div>
        </div>
        <div class="btn btn-sm col-4 m-1" onclick="window.location='<?=base_url('C_index/screening')?>'">
            <div class="card-wrapper">
            <img class="card-img-top rounded mx-auto d-block mt-1" src="<?= base_url()?>/assets/img/screening.png" alt="Card image cap" style ="width : 3rem ; height : 3rem;">
                <div class="card-body p-1">
                    <h6 class="card-title">Screening Mandiri</h6>
                </div>
            </div>
        </div>
        <div class="btn btn-sm col-4 m-1" onclick="window.location='<?=base_url('C_index/faq')?>'">
            <div class="card-wrapper">
            <img class="card-img-top rounded mx-auto d-block mt-1" src="<?= base_url()?>/assets/img/faq.png" alt="Card image cap" style ="width : 3rem ; height : 3rem;">
                <div class="card-body p-1">
                    <h6 class="card-title">FAQ</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of layanan header -->
<!-- aticle -->
<hr>
<div class="container-fluid">
    <h4 class="title"><i class="fas fa-book-open"></i>&nbsp Baca artikel</h4>
    <div class="row text-center flex-nowrap" style="overflow: auto;">

    <?php foreach($rs_artikel as $artikel){?>
        <div class="btn btn-sm col-auto m-1 p-0 pb-2">
            <div class="card-wrapper" style="width: 20rem;">
            <?php if($artikel->img_artikel!=""||$artikel->img_artikel!=null) { ?>
                <img class="card-img-top" height="180" src="<?= base_url('uploads/').$artikel->img_artikel?>" alt="Card image cap">
            <?php
            }else{
            ?>
                <img class="card-img-top" height="180" src="<?= base_url()?>/assets/img/batuk.jpg" alt="Card image cap">
            <?php } ?>
                <div class="card-body" onclick="window.location='<?=base_url('C_index/artikel/'.$artikel->id_artikel)?>'">
                <!-- judul untuk artikel -->
                <p class="card-text text-left"><?= $artikel->judul_artikel?></p>
                <a href="#" class="btn btn-primary float-right">Baca Selengkapnya </a>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
       
<!-- end of article -->