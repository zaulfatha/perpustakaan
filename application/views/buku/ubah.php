<!-- content -->
<div class="content mt-3">
  <div class="card">
    <div class="card-header">
      Tambah Data Master Penerbit
    </div>
    <div class="card-body">

      <a href="<?= base_url('penerbit') ?>" class="btn btn-warning mb-3">Tampil Data</a>

      <form method="POST" action="<?= base_url('penerbit/update/' . $penerbit->id_penerbit) ?>">
        <div class="form-group">

          <label for="penerbit">Nama Penerbit</label>
          <input type="text" name="nama_penerbit" class="form-control" id="penerbit" autocomplete="off" value="<?= $penerbit->nama_penerbit ?>" required>

        </div>
        <button type="submit" class="btn btn-success">Ubah</button>
      </form>

    </div>
  </div>
</div>
<!-- end content -->