<div class="container">
    <h4 class="title"><i class="fas fa-info-circle"></i>&nbsp Kalkulator Kehamilan</h4>
    <div class="card-wrapper">
        <div class="card-body">
            <p class="description">
                Kalkulator yang membantu memperkirakan hari perkiraan lahir si buah hati
            </p>
        </div>
        <form action="post">
            <div class="form-group">
            <label for="tanggal_haid">Tanggal Hari Pertama Haid Terakhir (HPHT)</label>
            <input type="date" name="tanggal_haid" id="tanggal_haid" class="form-control">
            </div>
            <div class="form-group">
            <label for="siklus_haid">Siklus Haid</label>
            <input type="number" name="siklus_haid" id="siklus_haid" class="form-control" max="30">
            <div class="form-group">
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Hitung perkiraan</button>
        </form>
        <hr>
        <p class="description">Hasil Perkiraan</p>
        Berdasarkan HPHT anda yaitu {tanggal input} maka dapat di perkirakan sebagai berikut :<br>
        Perkiraan Pembuahan : {tanggal-pembuahan}<br>
        Perkiraan Usia Janin : {usia janin (hari)}<br>
        Perkiraan lahir : {tanggal-lahir}<br>
        
    </div>
</div>
<!-- end of article -->