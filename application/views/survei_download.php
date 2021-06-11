<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Informasi Profile Ibu Hamil</title>
</head>
<body>
 
<div id="container">
    <h1>Informasi Profile Ibu Hamil</h1>
 
    <div id="body">
       <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?=$rs_data[0]->nama??""?></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir</td>
                <td>:</td>
                <td><?=$rs_data[0]->tempat_lahir??""?>, <?=$rs_data[0]->tgl_lahir??""?></td>
            </tr>
            <tr>
                <td>Bulan Kehamilan</td>
                <td>:</td>
                <td><?=$rs_data[0]->bln_kehamilan??""?> Bulan</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?=$rs_data[0]->agama??""?></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><?=$rs_data[0]->pendidikan_terakhir??""?></td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>:</td>
                <td><?=$rs_data[0]->gol_darah??""?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?=$rs_data[0]->pekerjaan??""?></td>
            </tr>
       </table>
       <br>
       <br>
       <h1>Data Survei</h1>
       <table border="1">
       <?php foreach($rs_data2 as $data2){?>
       <tr>
       <td><h4><?=$data2->head??""?></h4><br><?=$data2->body??""?></td>
       <td><?=$data2->jawaban??""=="Y"?"YA":"TIDAK"?></td>
       </tr>
       
       <?php } ?>
       </table>
    </div>
 
</div>
 
</body>
</html>