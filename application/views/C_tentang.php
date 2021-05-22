<div class="container">
<h6 class="title float-right btn-sm btn-primary ml-1" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Data Tentang</h4>
    <form action="<?=base_url('C_setup_tentang/post_create')?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                    <label for="alamat_klinik">Tentang</label>
                    <Textarea required name="tentang" id="tentang" class="form-control" cols="50" rows="20"></textarea>
            </div>
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>