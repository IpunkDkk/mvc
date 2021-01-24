<div class="container">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Detail Mahasiswa  <?=$data['mhs']['nama'] ?></h5>
                <p class="card-text">NPM : <?= $data['mhs']['npm']; ?></p>
                <p class="card-text">NPM : <?= $data['mhs']['jurusan']; ?></p>
                <p class="card-text">NPM : <?= $data['mhs']['email']; ?></p>
            <a href="<?=BASEURL; ?>/Mahasiswa/" class="badge rounded-pill bg-primary">Kembali</a>
        </div>
    </div>

</div>