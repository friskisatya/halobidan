<div class="container">
  <h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i
      class="fas fa-arrow-left"></i>&nbsp Back</h6>
  <h4 class="title"><i class="fas fa-columns"></i>&nbsp Survei Kehamilan</h4>
  <form action="<?=base_url('C_setup_faq/post_create')?>" method="POST">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
    
            <h6 class="text-justify">Pengukuran Tinggi Badan Cukup 1 Kali</h6>    
            <p class="text-description">
                Bila Tinggi Badan < 145 CM , Maka faktor resiko panggul sempit, kemungkinan sulit melahirkan secara normal
            </p>
            </div>
            <div class="col-4 m-auto">

       <input type="radio" name="answer" id="answer1" value="Y">Ya
       <input type="radio" name="answer" id="answer2" value="N">Tidak
          </div>

        
        </div>
      
    </div>
</div>

<div class="container text-center">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>