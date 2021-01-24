
<div class="container">

    <div class="jumbotron mt-4">
        <h1 class="display-4">Hello, <?=$data['nama']; ?></h1>
        <?php if ($data['nama'] == 'Anom') : ?>
            <p class="lead">Login terlebih dahulu untuk bisa mengedit dan sebeagainya <a href="<?= BASEURL; ?>/login">Login</a></p>
        <?php endif ; ?>
        <hr class="my-4">
        <p>Page ini dibuat untuk mengentry data mahasiswa</p>
        <a class="btn btn-primary btn-lg" href="<?= BASEURL; ?>/About/page" role="button">Tentang Halaman Ini</a>
    </div>

</div>