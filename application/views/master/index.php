<main>

  <?= $this->session->flashdata('pesan'); ?>



  <a href="<?= base_url('master/Add') ?>"><button type="button" class="btn btn-primary">Add</button></a>
  <div class="row g-5">
    <div class="col-md-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Gambar</th>
            <th scope="col">Aktivitas</th>

          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($master as $row) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><?= $row['tgl']; ?></td>
              <td><img height="50" width="50" src="<?= base_url('assets/gambar/wajan.jpg') ?>" class="card-img-top" alt="..."></td>
              <td><?= $row['aktivitas']; ?></td>
              <td align="center">
                <a href="<?= base_url('Master/Update/') ?><?= $row['id'] ?>"><button type="button" class="btn btn-outline-warning">Update</button></a> |
                <a href="<?= base_url('Master/Read/') ?><?= $row['id'] ?>"><button type="button" class="btn btn-outline-info">Read</button></a> |
                <a onclick="return confirm('Yakin hapus <?= $row['aktivitas'] ?> ?' )" href="<?= base_url('Master/remove/') ?><?= $row['id'] ?>"><button type="button" class="btn btn-outline-danger">Delete</button>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>

    </div>
  </div>

  <div class="">



  </div>
</main>