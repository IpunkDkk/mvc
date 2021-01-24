<div class="container">

    <div class="row">
        <div class="col-6 mt-5">
          <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            tambah mahasiswa
            </button>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center"><?= $mhs['nama']; ?>
                <a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary">Detail</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/Mahasiswa/tambah" method="POST">
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
            <label for="NPM">NPM</label>
            <input type="number" class="form-control" id="NPM" name="npm">
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="Email" name="email">
            <div class="form-group">
            <label for="jurusan" >Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan" >
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="System Informatika">System Informatika</option>
            </select>
            </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>