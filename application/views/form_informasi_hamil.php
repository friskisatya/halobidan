<div class="container">
    <h6 class="title float-right btn-sm btn-primary"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-user"></i>&nbsp Informasi Ibu Hamil</h4>
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama Ibu Hamil</label>
                <input required type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="TTL">Tempat,Tanggal lahir</label>
                <div class="row">
                    <div class="col-6">
                        <input required type="text" name="tempat" class="form-control" id="TTL" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-6">
                        <input required type="date" name="tanggal_lahir" class="form-control" id="">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <label for="bulan_lahir">Bulan Kehamilan</label>
                <select name="bulan" id="bulan_lahir" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" class="form-control">Pilih Bulan</option>
                    <?php
                    for ($x = 1; $x <= 9; $x++) {
                    echo "<option value='$x'>$x</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-8">
                <label for="agama">Agama</label>
                <select name="agama" id="agama" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" class="form-control">Pilih Agama</option>
                    <option value="Islam" class="form-control">Islam</option>
                    <option value="Protestan" class="form-control">Protestan</option>
                    <option value="Katolik" class="form-control">Katolik</option>
                    <option value="Hindu" class="form-control">Hindu</option>
                    <option value="Buddha" class="form-control">Buddha</option>
                    <option value="Khonghucu" class="form-control">Khonghucu</option>
                </select>
            </div>
            <div class="form-group col-7 mt-1">
                <label for="pendidikan">Pendidikan Terakhir</label>
                <select name="pendidikan" id="pendidikan" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" class="form-control">Pilih Pendidikan</option>
                    <option value="SD" class="form-control">SD</option>
                    <option value="SMP" class="form-control">SMP</option>
                    <option value="SLTA/SMU/SMK" class="form-control">SLTA/SMU/SMK</option>
                    <option value="D3" class="form-control">D3</option>
                    <option value="S1/D4" class="form-control">S1/D4</option>
                    <option value="S2" class="form-control">S2</option>
                    <option value="S3" class="form-control">S3</option>
                </select>
            </div>
            <div class="form-group col-5 mt-1">
                <label for="gol">Golongan Darah</label>
                <select name="gol_darah" id="gol" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" class="form-control">Pilih Golongan Darah</option>
                    <option value="A" class="form-control">A</option>
                    <option value="B" class="form-control">B</option>
                    <option value="AB" class="form-control">AB</option>
                    <option value="O" class="form-control">O</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                <input required type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
            </div>
            <div class="form-group col-6">
                <label for="cek_1">Riwayat Check Up Ke 1</label>
                <input type="date" name="cek_1" id="cek_1" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="cek_2">Riwayat Check Up Ke 2</label>
                <input type="date" name="cek_2" id="cek_2" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="cek_3">Riwayat Check Up Ke 3</label>
                <input type="date" name="cek_3" id="cek_3" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="cek_4">Riwayat Check Up Ke 4</label>
                <input type="date" name="cek_4" id="cek_4" class="form-control">
            </div>
            
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Lengkapi</button>
        </div>
</div>
</form>
<!-- end of article -->