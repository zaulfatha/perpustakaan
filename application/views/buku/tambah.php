<!-- content -->
<div class="content mt-3">
  <div class="card">
    <div class="card-header">
      Tambah Data Master Buku
    </div>
    <div class="card-body">

      <a href="<?= base_url('buku') ?>" class="btn btn-warning mb-3">Tampil Data</a>

      <form method="POST" action="<?= base_url('buku/simpan') ?>">
        <div class="form-group">
          <label for="buku">Nama Buku</label>
          <input type="text" name="nama_buku" class="form-control" id="buku" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label for="buku">Kode Buku</label>
          <input type="text" name="kode_buku" class="form-control" id="buku" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label for="buku">Penulis</label>
          <select class="form-control" name="id_penulis" required>
          <option value="">-- Pilih --</option>
            <?php foreach ($penulis as $val) : ?>
              <option value="<?= $val['id_penulis'] ?>"><?= $val['nama_penulis'] ?></option>
            <?php endforeach; ?>
          </select>

        </div>
        <div class="form-group">
          <label for="buku">Penerbit</label>
          <select class="form-control" name="id_penerbit" required>
          <option value="">-- Pilih --</option>
            <?php foreach ($penerbit as $val) : ?>
              <option value="<?= $val['id_penerbit'] ?>"><?= $val['nama_penerbit'] ?></option>
            <?php endforeach; ?>
          </select>

        </div>
        <div class="form-group">
          <label for="buku">Kategori</label>
          <select class="form-control" name="id_kategori" required>
          <option value="">-- Pilih --</option>
            <?php foreach ($kategori as $val) : ?>
              <option value="<?= $val['id_kategori'] ?>"><?= $val['nama_kategori'] ?></option>
            <?php endforeach; ?>
          </select>

        </div>
        <div class="form-group">
          <label for="buku">Stok</label>
          <input type="text" name="stok" class="form-control" id="buku" autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>

    </div>
  </div>
</div>
<!-- end content -->