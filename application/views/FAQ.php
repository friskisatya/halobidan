<div class="container">
    <h6 class="title float-right btn-sm btn-primary"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-comments"></i>&nbsp Frequency Ask Question</h4>
    <h4>Kami Membantumu dalam memecahkan masalah</h4>
    <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
  <?php
    foreach($rs_faq as $faq){
  ?>
  <div class="card card-plain">
    <div class="card-header" role="tab" id="<?= $faq->id_faq ?>">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <?= $faq->ask?>
            <i class="tim-icons icon-minimal-down"></i>
        </a>
    </div>

    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-body">
        <?= $faq->question?>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
</div>

<!-- end of article -->