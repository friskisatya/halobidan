<div class="container">
  <h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i
      class="fas fa-arrow-left"></i>&nbsp Back</h6>
  <h4 class="title"><i class="fas fa-columns"></i>&nbsp Survei Kehamilan</h4>
  <form action="<?=base_url('C_screening/post_create_survei')?>" method="POST">
    <div class="card-body">

        <?php foreach($rs_data as $a){?>
        <div class="row">
            <div class="col-8">
    
            <h6 class="text-justify"><?= $a->head?></h6>    
            <p class="text-description">
                <?= $a->body?>
            </p>
            </div>
            <div class="col-4 m-auto">
            <input type="hidden" name="pertanyaan[]" value="<?= $a->id_survei ?>">
            <select required name="jawaban[]" id="" class="form-control">
              <option value="" <?= $a->jawaban==""?"selected":""?> >Pilih Jawaban</option>
              <option value="Y" <?= $a->jawaban=="Y"?"selected":""?>>Ya</option>
              <option value="N" <?= $a->jawaban=="N"?"selected":""?>>Tidak</option>
            </select>
            </div>

        
        </div>
        <hr>
        <?php } ?>
      
    </div>
</div>
<div class="row">
<div class="container text-center col-6">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<div class="container text-center col-6">
<button type="button" onclick="window.location='<?=base_url('C_screening/download')?>'" class="btn btn-primary">Download</button>
</div>

</div>

</form>
</div>