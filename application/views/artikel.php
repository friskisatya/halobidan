<div class="container">
    <h6 class="title float-right btn-sm btn-primary" onclick="window.location='<?=base_url('C_index')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-book-open"></i>&nbsp artikel</h4>
    <div class="card">
    <?php if($rs_artikel[0]->img_artikel!=""||$rs_artikel[0]->img_artikel!=null){?>
        <img id="previewImg" src="<?= base_url('uploads/').$rs_artikel[0]->img_artikel?>" alt="pic">
    <?php
    }else{
    ?>
        <img class="card-img-top" src="<?= base_url()?>/assets/img/batuk.jpg" alt="Card image cap">
    <?php } ?>
        <div class="card-body">
            <h4 class="card-title text-left"><?= $rs_artikel[0]->judul_artikel?></h4>
            <p class="card-text text-justify"><?= $rs_artikel[0]->isi_artikel?></p>
    </div><hr>
    <h4>Baca Artikel Lainnya</h4>
    <div class="row text-center flex-nowrap" style="overflow: auto;">
    <?php foreach($rs_artikel_all as $artikel){?>
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

<!-- end of article -->