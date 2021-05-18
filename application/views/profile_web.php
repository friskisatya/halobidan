<div class="card-wrapper">
    <div class="card-body">
        <div class="card-user card">
            <div class="row">
                <div class="card-body col-md-6">
                    <div class="author">
                        <h3 class="title text-center" id="layanan">Profile</h3>
                        <img class="avatar" src="<?= base_url()?>/assets/img/batuk.jpg" alt="profile">
                        <h4 class="title">Asqiah Faddilah</h4>
                        <div class="row">
                            <div class="col-6">
                                <p class="description">
                                    Usia : 23 Tahun
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="description">
                                    Usia Kehamilan : 7 Bulan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <p class="description">
                            Riwayat Check Up
                        </p>
                        <div class="row">
                            <div class="col-6">
                                <p class="description">
                                    Petama : 11/05/2020
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="description">
                                    Kedua : 11/05/2020
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="description">
                                    Ketiga : 11/05/2020
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="description">
                                    Keempat : 11/05/2020
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a href="" class="btn btn-primary btn-round btn-sm">
                                    Ambil Survei Kehamilan
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="" class="btn btn-primary btn-round btn-sm">
                                    Lengkapi Profile Ibu Hamil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body col-md-6">
                <div class="author">
                <h3 class="title text-center" id="layanan">Informasi Data Ibu Hamil</h3>
                <div class="row">
                            <div class="col-12 text-left">
                                <p class="description">
                                   Tempat Tanggal Lahir :
                                </p>
                            </div>
                            <div class="col-12 text-left">
                                <p class="description">
                                    Bulan Kehamilan :
                                </p>
                            </div>
                            <div class="col-12 text-left">
                                <p class="description">
                                    Agama :
                                </p>
                            </div>
                            <div class="col-12 text-left">
                                <p class="description">
                                    Pendidikan Terakhir :
                                </p>
                            </div>
                            <div class="col-12 text-left">
                                <p class="description">
                                    Golongan Darah :
                                </p>
                            </div>
                            <div class="col-12 text-left">
                                <p class="description">
                                   Pekerjaan :
                                </p>
                            </div>
                        </div>
                </div>
                </div>
            </div>
            <hr class="bg-light">
            <div class="row">
                <div class="col-md-3"></div>
            <div class="col-md-6">
            <h3 class="title text-center" id="layanan">Kalkulator Kehamilan</h3>
            <div class="card-wrapper">
        <div class="card-body">
            <p class="description">
                Kalkulator yang membantu memperkirakan hari perkiraan lahir si buah hati
            </p>
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
        </div>
        <hr>
        <p class="description">Hasil Perkiraan</p>
        Berdasarkan HPHT anda yaitu {tanggal input} maka dapat di perkirakan sebagai berikut :<br>
        Perkiraan Pembuahan : {tanggal-pembuahan}<br>
        Perkiraan Usia Janin : {usia janin (hari)}<br>
        Perkiraan lahir : {tanggal-lahir}<br>
        
    </div>
            </div>
            <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</div>