<div class="container">
    <h6 class="title float-right btn-sm btn-primary" onclick="window.location='<?=base_url('C_index')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-user"></i>&nbsp Informasi Ibu Hamil</h4>
    <?= $this->session->userdata("notif_edit");$this->session->unset_userdata("notif_edit")?>
    <?= $this->session->userdata("notif_login");$this->session->unset_userdata("notif_login")?>
    <form action="<?=base_url('C_form_profile_hamil/post_create')?>" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama Ibu Hamil</label>
                <input required type="text" value="<?= $rs_data[0]->nama??""?>" name="nama" class="form-control" id="nama" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="TTL">Tempat,Tanggal lahir</label>
                <div class="row">
                    <div class="col-6">
                        <input required type="text" value="<?= $rs_data[0]->tempat_lahir??""?>" name="tempat_lahir" class="form-control" id="TTL" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-6">
                        <input required type="date" value="<?= $rs_data[0]->tgl_lahir??""?>" name="tgl_lahir" class="form-control" id="">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <label for="bulan_lahir">Bulan Kehamilan</label>
                <select name="bln_kehamilan" id="bulan_lahir" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" class="form-control">Pilih Bulan</option>
                    <?php
                    for ($x = 1; $x <= 9; $x++) {
                    if($rs_data[0]->bln_kehamilan??"" == $x){
                        $sel = "selected";
                    }else{
                        $sel = "";
                    }
                    echo "<option value='$x' $sel >$x</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-8">
                <label for="agama">Agama</label>
                <select name="agama" id="agama" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" <?= $rs_data[0]->agama??"" == ""?"selected":"" ?> class="form-control">Pilih Agama</option>
                    <option value="Islam" <?= $rs_data[0]->agama??"" == "Islam"?"selected":"" ?> class="form-control">Islam</option>
                    <option value="Protestan" <?= $rs_data[0]->agama??"" == "Protestan"?"selected":"" ?> class="form-control">Protestan</option>
                    <option value="Katolik" <?= $rs_data[0]->agama??"" == "Katolik"?"selected":"" ?> class="form-control">Katolik</option>
                    <option value="Hindu" <?= $rs_data[0]->agama??"" == "Hindu"?"selected":"" ?> class="form-control">Hindu</option>
                    <option value="Buddha" <?= $rs_data[0]->agama??"" == "Buddha"?"selected":"" ?> class="form-control">Buddha</option>
                    <option value="Khonghucu" <?= $rs_data[0]->agama??"" == "Khonghucu"?"selected":"" ?> class="form-control">Khonghucu</option>
                </select>
            </div>
            <div class="form-group col-7 mt-1">
                <label for="pendidikan">Pendidikan Terakhir</label>
                <select name="pendidikan_terakhir" id="pendidikan" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" <?= $rs_data[0]->pendidikan_terakhir??"" == ""?"selected":"" ?> class="form-control">Pilih Pendidikan</option>
                    <option value="SD" <?= $rs_data[0]->pendidikan_terakhir??"" == "SD"?"selected":"" ?> class="form-control">SD</option>
                    <option value="SMP" <?= $rs_data[0]->pendidikan_terakhir??"" == "SMP"?"selected":"" ?> class="form-control">SMP</option>
                    <option value="SLTA/SMU/SMK" <?= $rs_data[0]->pendidikan_terakhir??"" == "SLTA/SMU/SMK"?"selected":"" ?> class="form-control">SLTA/SMU/SMK</option>
                    <option value="D3" <?= $rs_data[0]->pendidikan_terakhir??"" == "D3"?"selected":"" ?> class="form-control">D3</option>
                    <option value="S1/D4" <?= $rs_data[0]->pendidikan_terakhir??"" == "S1/D4"?"selected":"" ?> class="form-control">S1/D4</option>
                    <option value="S2" <?= $rs_data[0]->pendidikan_terakhir??"" == "S2"?"selected":"" ?> class="form-control">S2</option>
                    <option value="S3" <?= $rs_data[0]->pendidikan_terakhir??"" == "S3"?"selected":"" ?> class="form-control">S3</option>
                </select>
            </div>
            <div class="form-group col-5 mt-1">
                <label for="gol">Golongan Darah</label>
                <select name="gol_darah" id="gol" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" <?= $rs_data[0]->gol_darah??"" == ""?"selected":"" ?> class="form-control">Pilih Golongan Darah</option>
                    <option value="A" <?= $rs_data[0]->gol_darah??"" == "A"?"selected":"" ?> class="form-control">A</option>
                    <option value="B" <?= $rs_data[0]->gol_darah??"" == "B"?"selected":"" ?> class="form-control">B</option>
                    <option value="AB" <?= $rs_data[0]->gol_darah??"" == "AB"?"selected":"" ?> class="form-control">AB</option>
                    <option value="O" <?= $rs_data[0]->gol_darah??"" == "O"?"selected":"" ?> class="form-control">O</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                <input required type="text" value="<?= $rs_data[0]->pekerjaan??"" ?>" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
            </div>
            <!-- <div class="form-group col-6">
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
            </div> -->
            
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary">Lengkapi</button>
        </div>
</div>
</form>
<!-- end of article -->