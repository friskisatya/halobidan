<div class="container">
    <h4 class="title"><i class="fas fa-info-circle"></i>&nbsp Kalkulator Kehamilan</h4>
    <div class="card-wrapper">
        <div class="card-body">
            <p class="description">
                Kalkulator yang membantu memperkirakan hari perkiraan lahir si buah hati
            </p>
        </div>
        <form action="<?=base_url('C_index/kalkulator_kehamilan')?>" method="POST">
            <div class="form-group">
            <label for="tanggal_haid">Tanggal Hari Pertama Haid Terakhir (HPHT)</label>
            <input required type="date" name="tanggal_haid" id="tanggal_haid" class="form-control">
            </div>
            <div class="form-group">
            <label for="siklus_haid">Siklus Haid</label>
            <input required type="number" name="siklus_haid"  id="siklus_haid" class="form-control" max="35" min="21">
            <div class="form-group">
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Hitung perkiraan</button>
        </form>
        <hr>
        <p class="description">Hasil Perkiraan</p>
        Berdasarkan HPHT anda yaitu <?= $tgl_input??"{tanggal input}"?> maka dapat di perkirakan sebagai berikut :<br>
        Perkiraan Pembuahan : <?=$hp==""?"{tanggal pembuahan}":date_format($hp,"Y-m-d")?><br>
        Perkiraan Usia Janin : <?=$uj_minggu??"0"?> Minggu, <?=$uj_hari??"0"?> Hari   <br>
        Perkiraan lahir : <?=$hpt==""?"{tanggal perkiraan lahir}":date_format($hpt,"Y-m-d")?><br>
        Asumsi ini mengakibatkan metode ini mempunyai tingkat kesalahan plus minus 2 minggu.
        
    </div>
</div>
<!-- end of article -->