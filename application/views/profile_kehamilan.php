<div class="container">
    <h6 class="title float-right btn-sm btn-primary" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>
    <h4 class="title"><i class="fas fa-user"></i>&nbsp Profile Ibu Hamil</h4>
    <div class="card-user card">
        <div class="card-body">
            <div class="author">
                <img class="avatar" src="<?= base_url()?>/assets/img/batuk.jpg" alt="profile">
                <h4 class="title"><?=$this->session->userdata('nama')?></h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="description">
                        Usia : <?= $usia?> Tahun
                    </p>
                </div>
                <div class="col-6">
                    <p class="description">
                        Usia Kehamilan : 7 Bulan
                    </p>
                </div>
                <div class="col-12 text-center">
                    <p class="description">
                        Riwayat Check Up
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <p class="description">
                                Petama : <?= $rs_riwayat[0]->tgl_checkup??""?>
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="description">
                                Kedua : <?= $rs_riwayat[1]->tgl_checkup??""?>
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="description">
                                Ketiga : <?= $rs_riwayat[2]->tgl_checkup??""?>
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="description">
                                Keempat : <?= $rs_riwayat[3]->tgl_checkup??""?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    Tambah riwayat checkup
                </div>
            </div>
            <form action="<?=base_url('C_index/post_riwayat_checkup')?>" method="POST">
            <div class="row">
                
                <div class="col-6 text-center">
                <input required type="date" min="<?= $rs_riwayat[3]->tgl_checkup??$rs_riwayat[2]->tgl_checkup??$rs_riwayat[1]->tgl_checkup??$rs_riwayat[0]->tgl_checkup??""?>" name="tgl_checkup" class="form-control" id="">
                </div>
                <div class="col-6 text-center">
                <button class="btn btn-primary btn-small">Simpan</button>
                </div>
                
            </div>
            </form>

            <div class="row">
                <div class="col-6">
                    <a href="<?=base_url('C_screening/create_survei')?>" class="btn btn-primary btn-round btn-sm">
                        Ambil Survei Kehamilan
                    </a>
                </div>
                <div class="col-6">
                    <a href="<?=base_url('C_form_profile_hamil')?>" class="btn btn-primary btn-round btn-sm">
                        Lengkapi Profile Ibu Hamil
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of article -->